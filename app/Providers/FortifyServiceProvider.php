<?php

namespace App\Providers;

use App\models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Actions\Fortify\CreateNewUser;
use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use App\Http\Controllers\AdminController;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Contracts\Auth\StateFulGuard;
use App\Actions\Fortify\AttemptToAuthenticate;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Actions\Fortify\RedirectIfTwoFactorAuthenticatable;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->when([
            AdminController::class,
            AttemptToAuthenticate::class,
            RedirectIfTwoFactorAuthenticatable::class
        ])->needs(StateFulGuard::class)->give(function () {
            return Auth::guard('admin');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);


        RateLimiter::for('login', function (Request $request) {
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())) . '|' . $request->ip());

            return Limit::perMinute(5)->by($throttleKey);
        });

         RateLimiter::for('register', function (Request $request) {
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())) . '|' . $request->ip());

            return Limit::perMinute(5)->by($throttleKey);
        });

         Fortify::registerView(function () {
            return view('auth.register');
         });

        //  Fortify::store(function (string $callback) {
        //      app()->singleton(CreatesNewUsers::class, $callback);
        //     });
        
        Fortify::createUsersUsing(CreateNewUser::class);
        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        Fortify::requestPasswordResetLinkView(function () {
            return view('auth.forgot-password');
        });

        Fortify::resetPasswordView(function ($request) {
            return view('auth.reset-password', ['request' => $request]);
        });

        Fortify::VerifyEmailView(function ($request) {
            return view('auth.verify-email');
        });

        Fortify::ConfirmPasswordView(function ($request) {
            return view('auth.passwords.confirm');
        });

        Fortify::TwoFactorChallengeView(function ($request) {
            return view('auth.two-factor-challenge');
        });
    }

    protected function configureRoutes()
    {
        if (Fortify::$registersRoutes) {
            Route::group([
                'namespace' => 'Laravel\Fortify\Http\Controllers',
                'domain' => config('fortify.domain', null),
                'prefix' => config('fortify.prefix'),
            ], function () {
                $this->loadRoutesFrom(__DIR__.'/../routes/admin.php');
            });
        }
    }
}
