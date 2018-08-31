<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 31 Aug 2018 02:06:08 +0000.
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
 *
 * @package App\Models
 */
class Offer extends Eloquent
{
	protected $fillable = [
		'name',
		'description',
		'image_50',
		'image_350',
		'link'
	];
}
