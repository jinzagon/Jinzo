<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 04 Sep 2018 00:12:05 -0500.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Rating
 * 
 * @property int $id
 * @property int $user_id
 * @property int $rating
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $ratable_id
 * @property string $ratable_type
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Rating extends Eloquent
{
	protected $casts = [
		'user_id' => 'int',
		'rating' => 'int',
		'rateable_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'rating',
		'rateable_id',
		'rateable_type'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
