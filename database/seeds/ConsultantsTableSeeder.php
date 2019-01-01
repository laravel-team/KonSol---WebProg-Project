<?php

use Illuminate\Database\Seeder;

class ConsultantsTableSeeder extends Seeder
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
            DB::table('consultants')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => $faker->password,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'address' => $faker->streetAddress,
                'corporate' => $faker->company,
                'contactNumber' => $faker->e164PhoneNumber,
                'profilePicture' => $faker->imageUrl(640, 480, 'cats')
            ]);

            DB::table('header_categories')->insert([
                'consultantID' => ($i+1),
                'categoryID' => rand(1,3)
            ]);
        }
    }
}
