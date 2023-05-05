<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\StudentDetail;
use Illuminate\Database\Seeder;
use App\Models\StudentDetails;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\StudentDetail::factory(2)->create();
        // \App\Models\StudentDetail::factory()->create([
        //     "fname" => "Mohan",
        //     "mname" => "Kumar",
        //     "lname" => "Sharma",
        //     "father_name" => "Mr. Papa",
        //     "mother_name" => "Miss Mammi",
        //     "address" => "My Address",
        //     "ph1" => "9632587410",
        //     "ph2" => "125896587",
        //     "city" => "New Delhi",
        //     "gender" => "Male",
        // ]);

        $this->call([
            StudentDetailsSeeder::class
        ]);
      
    
    }
}
