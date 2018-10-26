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

        $limit = 30;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('members')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => $faker->password,
                'gender' => $faker->randomElement(['Male', 'female']),
                'date-of-birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'address' => $faker->address,
                'contactNumber' => $faker->phoneNumber,
                'profilePicture' => $faker->imageUrl(640, 480, 'cats')
            ]);
        }
    }
}
