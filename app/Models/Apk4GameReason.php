<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4GameReason
 * 
 * @property int $id
 * @property int $game_id
 * @property string $phone
 * @property string|null $ip
 * @property int $addtime
 * @property int $uptime
 * @property string $game_name
 * @property string $system
 * @property string|null $remake
 * @property string|null $reason
 *
 * @package App\Models
 */
class Apk4GameReason extends Model
{
	protected $table = 'apk4_game_reason';
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'addtime' => 'int',
		'uptime' => 'int'
	];

	protected $fillable = [
		'game_id',
		'phone',
		'ip',
		'addtime',
		'uptime',
		'game_name',
		'system',
		'remake',
		'reason'
	];
}
