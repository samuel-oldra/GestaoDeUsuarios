<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Samuel B. Oldra',
            'email' => 'samuel.oldra@gmail.com',
            'password' => bcrypt('87654321')
        ]);
    }
}
