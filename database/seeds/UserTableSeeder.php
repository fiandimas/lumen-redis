<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i=0;$i<50;$i++){
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'job' => $faker->jobTitle,
                'age' => $faker->numberBetween(20,35),
                'address' => $faker->address,
            ]);
        }
    }
}
