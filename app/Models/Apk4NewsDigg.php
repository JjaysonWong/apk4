<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4NewsDigg
 * 
 * @property int $id
 * @property string $user_id
 * @property bool $type
 * @property int $platid
 * @property bool|null $click_type
 * @property int $addtime
 *
 * @package App\Models
 */
class Apk4NewsDigg extends Model
{
	protected $table = 'apk4_news_digg';
	public $timestamps = false;

	protected $casts = [
		'type' => 'bool',
		'platid' => 'int',
		'click_type' => 'bool',
		'addtime' => 'int'
	];

	protected $fillable = [
		'user_id',
		'type',
		'platid',
		'click_type',
		'addtime'
	];
}
