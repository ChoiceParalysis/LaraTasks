<?php

use Faker\Factory;

class TasksTableSeeder extends Seeder {
	
	public function run()
	{

		DB::table('tasks')->truncate();

		$faker = Factory::create();

		for( $i = 0; $i < 10; $i++ ){
			Task::create([
				'title' => $faker->sentence(4),
				'body' => $faker->paragraph(6),
				'user_id' => rand(1, 2),
				'completed' => $faker->boolean(50)
			]);
		}

	}

}