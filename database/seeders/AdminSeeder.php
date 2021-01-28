<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin as Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin->email = 'salloum.jad@ynov.com';
        $admin->password = bcrypt('Test1234');
        $admin->save();
    }
}
