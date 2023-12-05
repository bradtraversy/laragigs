<?php

namespace Database\Seeders;


use App\Models\Blog;
use App\Models\Team;
use App\Models\User;
use App\Models\Admin;
use App\Models\Listing;
use App\Models\Learning;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();

        $user = User::factory()->create();

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        Blog::factory(6)->create([
            'user_id' => $user->id
        ]);

        Learning::factory(6)->create([
            'user_id' => $user->id
        ]);

        // $user = Admin::factory()->create();

        // $user = Admin::factory()->create([
        //     'name' => 'Bill Burr',
        //     'email' => 'name@example.com'
        // ]);

        // $user->ownedTeams()->save(Team::forceCreate([
        //     'user_id' => $user->id,
        //     'name' => explode('Dante', $user->name, 2)[0] . "'s Team",
        //     'personal_team' => true,
        // ]));

        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode('Dante', $user->name, 2)[0] . "'s Team",
            'personal_team' => true,
        ]));

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, backend ,api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email2@email.com',
        //     'website' => 'https://www.starkindustries.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        //   ]);
    }
}
