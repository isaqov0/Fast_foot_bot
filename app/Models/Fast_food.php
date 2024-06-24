<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fast_food extends Model
{
    use HasFactory;
	protected $fillable =[
		'name',
		'price',
		'description',
		'number',
		'discount',
		'category_id',
		'image'
	];
	public function category(): BelongsTo
	{
		return $this->belongsTo(Categories::class);
	}
}
