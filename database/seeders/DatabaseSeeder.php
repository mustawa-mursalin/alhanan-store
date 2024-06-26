<?php
	
	namespace Database\Seeders;
	
	use Illuminate\Database\Seeder;
	
	// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
	
	class DatabaseSeeder extends Seeder
	{
		/**
		 * Seed the application's database.
		 */
		public function run() : void
		{
			$this->call([
				UserSeeder::class,
				CategorySeeder::class,
			]);
			
			\App\Models\User::factory(50)->create();
			\App\Models\Product::factory(50)->create();
		}
	}
