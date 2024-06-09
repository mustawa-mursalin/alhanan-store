<?php
	
	namespace Database\Seeders;
	
	use Illuminate\Database\Seeder;
	
	class UserSeeder extends Seeder
	{
		/**
		 * Run the database seeds.
		 */
		public function run() : void
		{
			\App\Models\User::create([
				'name'              => 'Administrator',
				'email'             => 'admin@alhanan-store.com',
				'password'          => bcrypt('bismillah'),
				'email_verified_at' => now(),
			]);
		}
	}
