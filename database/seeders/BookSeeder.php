<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use App\Models\User;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $user = User::all()->toArray();
        foreach(range(1,5) as $value){
            DB::table('books')->insert([
                'book_name' => $faker->name(),
                'book_author' => $faker->unique()->safeEmail(),
                 
            ]);
        }
    }
}
