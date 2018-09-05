<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 04 Sep 2018 20:19:24 -0500.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Offer
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $image_50
 * @property string $image_350
 * @property string $link
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property bool $is_active
 * @property int $rank
 * @property int $category_id
 * 
 * @property \App\Models\Category $category
 *
 * @package App\Models
 */
class Offer extends Eloquent
{
	
	protected $casts = [
		'is_active' => 'bool',
		'rank' => 'int',
		'category_id' => 'int'
	];
	
	protected $fillable = [
		'name',
		'description',
		'image_50',
		'image_350',
		'link',
		'is_active',
		'rank',
		'category_id'
	];
	
	public function scopeActive($query){
		return $query->where('is_active', true);
	}

	public function category()
	{
		return $this->belongsTo(\App\Models\Category::class);
	}
}