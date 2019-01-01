<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('members')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => $faker->password,
                'gender' => $faker->randomElement(['Male', 'female']),
                'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'address' => $faker->streetAddress,
                'contactNumber' => $faker->e164PhoneNumber,
                'profilePicture' => $faker->imageUrl(640, 480, 'cats')
            ]);
        }
    }
}
