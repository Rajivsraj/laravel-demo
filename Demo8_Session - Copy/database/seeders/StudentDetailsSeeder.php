<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
// use Illuminate\Support\Testing\Fakes\Fake;

class StudentDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        // for($i=1; $i<=40; $i++){
            DB::table("student_details")->insert([
                // "fname"=>Str::random(20),
                "fname"=>$faker->name(2, 4),
                "mname"=>$faker->lastName,
                "lname"=>$faker->lastName,
                "father_name"=>$faker->titleMale." ".$faker->firstNameMale,
                "mother_name"=>$faker->titleFemale." ".$faker->firstNameFemale,
                "address"=>$faker->address,
                "ph1"=>$faker->e164PhoneNumber,
                "ph2"=>$faker->e164PhoneNumber,
                "city"=>$faker->city,
                "gender"=>Hash::make("hello"),
            ]);
        // }
    }
}
