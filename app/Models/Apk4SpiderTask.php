<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4SpiderTask
 * 
 * @property int $id
 * @property int $number
 * @property string $filename
 * @property int $filesize
 * @property string $web_url
 * @property bool $status
 * @property Carbon|null $log_date
 * @property int $log_hour_start
 * @property int $log_hour_end
 * @property Carbon|null $start_time
 * @property Carbon|null $end_time
 * @property float $spend_time
 * @property int $uptime
 * @property int $addtime
 * @property int $success_number
 *
 * @package App\Models
 */
class Apk4SpiderTask extends Model
{
	protected $table = 'apk4_spider_task';
	public $timestamps = false;

	protected $casts = [
		'number' => 'int',
		'filesize' => 'int',
		'status' => 'bool',
		'log_date' => 'datetime',
		'log_hour_start' => 'int',
		'log_hour_end' => 'int',
		'start_time' => 'datetime',
		'end_time' => 'datetime',
		'spend_time' => 'float',
		'uptime' => 'int',
		'addtime' => 'int',
		'success_number' => 'int'
	];

	protected $fillable = [
		'number',
		'filename',
		'filesize',
		'web_url',
		'status',
		'log_date',
		'log_hour_start',
		'log_hour_end',
		'start_time',
		'end_time',
		'spend_time',
		'uptime',
		'addtime',
		'success_number'
	];
}
