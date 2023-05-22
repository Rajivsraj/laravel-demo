<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        for($i=1; $i<100; $i++){
            DB::table("logins")->insert([
                "email"=>$faker->email,
                "pass"=>$faker->password,
            ]);
        }
    }
}
