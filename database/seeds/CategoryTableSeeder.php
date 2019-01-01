<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        		[
                	'name' => 'Education'
            	],
            	[
            		'name' => 'Law'
            	],
            	[
            		'name' => 'Economic'
            	]
            ]);

        DB::table('consultation_methods')->insert([
                [
                    'name' => 'KonText'
                ],
                [
                    'name' => 'KonFace'
                ],
                [
                    'name' => 'Meeting'
                ]
            ]);
    }
}
