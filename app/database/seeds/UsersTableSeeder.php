<?php

use Faker\Factory;

class UsersTableSeeder extends Seeder {
	
	public function run()
	{

		DB::table('users')->truncate();

		$faker = Factory::create();

		User::create([
			'username' => $faker->name,
			'email' => $faker->email
		]);

		User::create([
			'username' => 'John',
			'email' => 'john@doe.com'
		]);

	}

}