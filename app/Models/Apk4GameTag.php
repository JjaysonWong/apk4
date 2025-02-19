<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4GameTag
 * 
 * @property int $gameid
 * @property int $tagid
 *
 * @package App\Models
 */
class Apk4GameTag extends Model
{
	protected $table = 'apk4_game_tag';
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
