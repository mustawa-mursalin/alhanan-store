<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id',
        'first_name',
        'last_name',
        'phone',
        'street_address',
        'province',
        'city',
        'district',
        'village',
        'zip_code',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'order_id' => 'integer',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
