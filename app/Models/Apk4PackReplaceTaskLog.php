<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4PackReplaceTaskLog
 * 
 * @property int $id
 * @property bool $classify
 * @property bool $pack_type
 * @property string $old_url
 * @property string $new_url
 * @property int $number
 * @property int $addtime
 * @property int $uptime
 *
 * @package App\Models
 */
class Apk4PackReplaceTaskLog extends Model
{
	protected $table = 'apk4_pack_replace_task_log';
	public $timestamps = false;

	protected $casts = [
		'classify' => 'bool',
		'pack_type' => 'bool',
		'number' => 'int',
		'addtime' => 'int',
		'uptime' => 'int'
	];

	protected $fillable = [
		'classify',
		'pack_type',
		'old_url',
		'new_url',
		'number',
		'addtime',
		'uptime'
	];
}
