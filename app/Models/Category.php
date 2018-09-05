<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 04 Sep 2018 20:16:09 -0500.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $offers
 *
 * @package App\Models
 */
class Category extends Eloquent
{
	protected $fillable = [
		'name',
		'description'
	];

	public function offers()
	{
		return $this->hasMany(\App\Models\Offer::class);
	}
}
