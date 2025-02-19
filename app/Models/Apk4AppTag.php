<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4AppTag
 * 
 * @property int $gameid
 * @property int $tagid
 *
 * @package App\Models
 */
class Apk4AppTag extends Model
{
	protected $table = 'apk4_app_tag';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'gameid' => 'int',
		'tagid' => 'int'
	];

	protected $fillable = [
		'gameid',
		'tagid'
	];
}
