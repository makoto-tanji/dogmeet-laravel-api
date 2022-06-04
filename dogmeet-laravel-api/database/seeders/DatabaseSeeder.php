<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        if (App::environment('local')) {
            $this->call(AreasTableSeeder::class);
            $this->call(BreedsTableSeeder::class);
            $this->call(ColorDogTableSeeder::class);
            $this->call(ColorsTableSeeder::class);
            $this->call(DogsTableSeeder::class);
            $this->call(UsersTableSeeder::class);
        }elseif(App::environment('production')) {
        }
    }
}
