<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = "Ramón";
        $user->email = "ramontru1@hotmail.com";
        $user->password = bcrypt("8431");

        $user->save();

        $user = new User();

        $user->name = "María";
        $user->email = "callosina@hotmail.com";
        $user->password = bcrypt("8431");

        $user->save();
    }
}
