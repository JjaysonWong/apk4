<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4SyncLinkLog
 * 
 * @property int $id
 * @property int $task_id
 * @property string $date
 * @property int $project_id
 * @property string $project_name
 * @property string $project_cate
 * @property int $pv
 * @property int $uv
 * @property int $download
 * @property int $addtime
 * @property int $uptime
 * @property bool $is_sync_spider_log
 *
 * @package App\Models
 */
class Apk4SyncLinkLog extends Model
{
	protected $table = 'apk4_sync_link_log';
	public $timestamps = false;

	protected $casts = [
		'task_id' => 'int',
		'project_id' => 'int',
		'pv' => 'int',
		'uv' => 'int',
		'download' => 'int',
		'addtime' => 'int',
		'uptime' => 'int',
		'is_sync_spider_log' => 'bool'
	];

	protected $fillable = [
		'task_id',
		'date',
		'project_id',
		'project_name',
		'project_cate',
		'pv',
		'uv',
		'download',
		'addtime',
		'uptime',
		'is_sync_spider_log'
	];
}
