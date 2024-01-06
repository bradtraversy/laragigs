<?php

namespace App\Providers;

use Laravel\Jetstream\Jetstream;
use App\Actions\Jetstream\CreateTeam;
use App\Actions\Jetstream\DeleteTeam;
use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\ServiceProvider;
use App\Actions\Jetstream\AddTeamMember;
use App\Actions\Jetstream\UpdateTeamName;
use App\Actions\Jetstream\InviteTeamMember;
use App\Actions\Jetstream\RemoveTeamMember;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Jetstream::IgnoreRoutes();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        $this->configurePermissions();

        Jetstream::createTeamsUsing(CreateTeam::class);
        Jetstream::updateTeamNamesUsing(UpdateTeamName::class);
        Jetstream::addTeamMembersUsing(AddTeamMember::class);
        Jetstream::inviteTeamMembersUsing(InviteTeamMember::class);
        Jetstream::removeTeamMembersUsing(RemoveTeamMember::class);
        Jetstream::deleteTeamsUsing(DeleteTeam::class);
        Jetstream::deleteUsersUsing(DeleteUser::class);
    }

    /**
     * Configure the permissions that are available within the application.
     */
    protected function configurePermissions(): void
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);

        Jetstream::role('admin', 'Administartor', [
            'create',
            'read',
            'update',
            'delete',
        ])->description('Admins acan perform any actions.');

        Jetstream::role('Editor', 'Editors', [
            'create',
            'read',
            'update',
        ])->description('They can not delete items');

        Jetstream::role('Subscriber', 'Subscribers', [
            'read',
        ])->description('They can only read');
    }
}
