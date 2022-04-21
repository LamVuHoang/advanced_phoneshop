<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "Lâm", 
                "email" => "josephlam1304@gmail.com", 
                "password" => bcrypt('12345'),
            ],
            [
                "name" => "Minh", 
                "email" => "abc@gmail.com", 
                "password" => bcrypt('12345'),
            ],
        ]);
    }
}
