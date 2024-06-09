<?php
	
	namespace App\Models;
	
	use Illuminate\Database\Eloquent\Factories\HasFactory;
	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\Relations\BelongsTo;
	
	class Product extends Model
	{
		use HasFactory;
		
		
		protected $fillable = [
			'category_id',
			'image',
			'name',
			'sku',
			'description',
			'stock_quantity',
			'price',
			'cost_price',
		];
		
		
		public function category() : BelongsTo
		{
			return $this->belongsTo(Category::class);
		}
	}
