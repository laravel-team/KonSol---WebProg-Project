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
                'profilePicture' => $faker->imageUrl(640, 480, 'cats'),
                'konWallet' => rand(50000,100000)
            ]);
        }

        DB::table('members')->insert([
                'name' => 'Aditya',
                'email' => 'adityabudiman@gmail.com',
                'password' => 'inginjadisultan',
                'gender' => 'Male',
                'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'address' => $faker->streetAddress,
                'contactNumber' => $faker->e164PhoneNumber,
                'profilePicture' => 'aditya.jpg',
                'konWallet' => 100000
            ]);

        DB::table('consultation_bookings')->insert([
                [
                    'memberID' => 11,
                    'consultantID' => 2,
                    'categoryID' => 1,
                    'consultationMethodID' => 2,
                    'consultationDate' => "2019-01-05",
                    'consultationTime' => "12:00",
                    'duration' => 2,
                    'price' => 100000,
                    'topic' => "apa aja deh",
                    'location' => "-"
                ],
                [
                    'memberID' => 11,
                    'consultantID' => 1,
                    'categoryID' => 2,
                    'consultationMethodID' => 3,
                    'consultationDate' => "2019-01-10",
                    'consultationTime' => "13:00",
                    'duration' => 2,
                    'price' => 100000,
                    'topic' => "apa aja deh",
                    'location' => "Bunis University"
                ]
            ]);
    }
}
