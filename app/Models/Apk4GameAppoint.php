<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4GameAppoint
 * 
 * @property int $id
 * @property int $gameid
 * @property string $mobile
 * @property int $addtime
 * @property int $ip
 * @property bool $system
 * @property bool $classify
 *
 * @package App\Models
 */
class Apk4GameAppoint extends Model
{
	protected $table = 'apk4_game_appoint';
	public $timestamps = false;

	protected $casts = [
		'gameid' => 'int',
		'addtime' => 'int',
		'ip' => 'int',
		'system' => 'bool',
		'classify' => 'bool'
	];

	protected $fillable = [
		'gameid',
		'mobile',
		'addtime',
		'ip',
		'system',
		'classify'
	];
}
