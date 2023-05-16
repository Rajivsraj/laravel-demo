<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i=0; $i<=50; $i++){
            DB::table("students")->insert([
                "fname"=>$faker->firstName,
                "lname"=>$faker->lastName,
            ]);
        }
    }
}
