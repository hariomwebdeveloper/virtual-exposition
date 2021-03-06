<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

    	// Seed for user
    	DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@yopmail.com',
            'password' => bcrypt('123456')
        ]);

    	// Seed for events
    	DB::table('events')->insert([
            'name' 			=> 'Carrot Top',
            'latitude' 		=> 32.8121958,
            'longitude' 	=> -96.8561709,
            'start_date' 	=> '2017-12-24',
            'end_date' 		=> '2018-01-02',
            'address' 		=> '2982 N Stemmons Fwy
								Dallas, TX 75247
								USA'
        ]);
        DB::table('events')->insert([
            'name' 			=> 'Tournament of Kings',
            'latitude' 		=> 32.914314,
            'longitude' 	=> -96.9412367,
            'start_date' 	=> '2018-01-15',
            'end_date' 		=> '2018-01-18',
            'address' 		=> '7899 State Hwy 161
								Irving, TX 75039
								USA'
        ]);


    	// Seed for stands
    	$faker = Faker::create();
    	for($i = 1; $i<=15; $i++){
	        DB::table('stands')->insert([
	            'name' => 'stand'.$i,
	            'price' => rand(100, 400),
	            'picture' => $faker->image('public/storage/images', 200, 300, null, false),
	            'event_id' => 1,
	            'reserved' => 0,
	            'booking_company_id' => 0
	        ]);
    	}

    	for($i = 1; $i<=15; $i++){
	        DB::table('stands')->insert([
	            'name' => 'stand'.$i,
	            'price' => rand(100, 400),
	            'picture' => $faker->image('public/storage/images', 200, 300, null, false),
	            'event_id' => 2,
	            'reserved' => 0,
	            'booking_company_id' => 0
	        ]);
    	}
    }
}
