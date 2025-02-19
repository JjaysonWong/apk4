<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4SyncLinkTask
 * 
 * @property int $id
 * @property string $date
 * @property int $status
 * @property int $task_batch
 * @property int $start_project_id
 * @property int $end_project_id
 * @property int $number
 * @property string $request_url
 * @property int $addtime
 * @property int $uptime
 *
 * @package App\Models
 */
class Apk4SyncLinkTask extends Model
{
	protected $table = 'apk4_sync_link_task';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'task_batch' => 'int',
		'start_project_id' => 'int',
		'end_project_id' => 'int',
		'number' => 'int',
		'addtime' => 'int',
		'uptime' => 'int'
	];

	protected $fillable = [
		'date',
		'status',
		'task_batch',
		'start_project_id',
		'end_project_id',
		'number',
		'request_url',
		'addtime',
		'uptime'
	];
}
