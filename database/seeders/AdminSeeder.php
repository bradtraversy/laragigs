<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Admin;
use App\Models\Listing;
use App\Models\Learning;
use Laravel\Jetstream\Team;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::factory(4)->create();

        Listing::factory()->create([
            'admin_id' => $admin->id
        ]);

        Blog::factory()->create([
            'admin_id' => $admin->id
        ]);

        Learning::factory()->create([
            'admin_id' => $admin->id
        ]);

        // $admin->ownedTeams()->save(Team::forceCreate([
        //     'admin_id' => $admin->id,
        //     'name' => explode('Dante', $admin->name, 2)[0] . "'s Team",
        //     'personal_team' => true,
        // ]));
    }
}







