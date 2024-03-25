<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker=Faker::create();

        foreach(range(1,200) as $list){
            DB::table('students')->insert([
                'name'=>$faker->name,
                'email'=>$faker->email,
            ]);
        }
    }
}
