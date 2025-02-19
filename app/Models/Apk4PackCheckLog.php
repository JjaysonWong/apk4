<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4PackCheckLog
 * 
 * @property int $id
 * @property int $gameid
 * @property string $name
 * @property string $and_url
 * @property bool $classify
 * @property int $status_code
 * @property string $error_msg
 * @property int $checktime
 * @property int $addtime
 * @property int $uptime
 * @property int $is_replace
 *
 * @package App\Models
 */
class Apk4PackCheckLog extends Model
{
	protected $table = 'apk4_pack_check_log';
	public $timestamps = false;

	protected $casts = [
		'gameid' => 'int',
		'classify' => 'bool',
		'status_code' => 'int',
		'checktime' => 'int',
		'addtime' => 'int',
		'uptime' => 'int',
		'is_replace' => 'int'
	];

	protected $fillable = [
		'gameid',
		'name',
		'and_url',
		'classify',
		'status_code',
		'error_msg',
		'checktime',
		'addtime',
		'uptime',
		'is_replace'
	];
}
