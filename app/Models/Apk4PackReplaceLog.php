<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4PackReplaceLog
 * 
 * @property int $id
 * @property int $check_id
 * @property int $gameid
 * @property bool $classify
 * @property string $name
 * @property string $old_and_url
 * @property string $new_and_url
 * @property Carbon|null $date
 * @property string $old_pack_info
 * @property string $new_pack_info
 * @property int $status
 * @property int|null $type
 * @property int $task_id
 * @property string $admin_name
 * @property int $admin_id
 * @property int $addtime
 * @property int $uptime
 *
 * @package App\Models
 */
class Apk4PackReplaceLog extends Model
{
	protected $table = 'apk4_pack_replace_log';
	public $timestamps = false;

	protected $casts = [
		'check_id' => 'int',
		'gameid' => 'int',
		'classify' => 'bool',
		'date' => 'datetime',
		'status' => 'int',
		'type' => 'int',
		'task_id' => 'int',
		'admin_id' => 'int',
		'addtime' => 'int',
		'uptime' => 'int'
	];

	protected $fillable = [
		'check_id',
		'gameid',
		'classify',
		'name',
		'old_and_url',
		'new_and_url',
		'date',
		'old_pack_info',
		'new_pack_info',
		'status',
		'type',
		'task_id',
		'admin_name',
		'admin_id',
		'addtime',
		'uptime'
	];
}
