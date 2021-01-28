<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User as User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run() // On sépare les seeders en plusieurs parties afin de simplifier les relations ainsi que limiter la casse si il y a une erreur dans l'un d'entre eux.
    {
        $this->call([
        UserSeeder::class,
        GameSeeder::class,
        AdminSeeder::class,
        ]);
    }
}
