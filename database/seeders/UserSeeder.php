<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User as User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User(); // Entrée des informations de l'exemple ou des exemples voulu en base de donnée
        $user->firstName = 'Salloum';
        $user->lastName = 'Jad';
        $user->birthDate = '2021-22-01';
        $user->email = 'salloum.jad@ynov.com';
        $user->password = bcrypt('Test1234');
        $user->adress = '5 avenue de Victor Hugo';
        $user->money = 1000;
        $user->save();
    }
}
