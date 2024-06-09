<?php
	
	namespace Database\Seeders;
	
	use App\Models\Category;
	use Illuminate\Database\Seeder;
	
	class CategorySeeder extends Seeder
	{
		/**
		 * Run the database seeds.
		 */
		public function run() : void
		{
			collect([
				'Perlengkapan Rumah Tangga',
				'Handphone & Aksesoris',
				'Peralatan Masak',
				'Perawatan & Kecantikan',
				'Aksesoris Fashion',
				'Jam Tangan',
				'Buku & Alat Tulis',
				'Komputer & Aksesoris',
			])->each(fn($category) => Category::query()->create(['name' => $category]));
		}
	}
