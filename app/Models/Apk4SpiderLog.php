<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4SpiderLog
 * 
 * @property int $id
 * @property int $task_id
 * @property string $spider_name
 * @property string $ip
 * @property string $method
 * @property int $status_code
 * @property Carbon|null $access_time
 * @property string $web_url
 * @property string $user_agent
 * @property string $nginx_time
 * @property string $http_version
 * @property string $log_content
 * @property string|null $path
 * @property int $gameid
 * @property string $union_id
 * @property string $url_id
 * @property int $addtime
 * @property int $uptime
 * @property string $site_title
 * @property string $site_domain
 *
 * @package App\Models
 */
class Apk4SpiderLog extends Model
{
	protected $table = 'apk4_spider_log';
	public $timestamps = false;

	protected $casts = [
		'task_id' => 'int',
		'status_code' => 'int',
		'access_time' => 'datetime',
		'gameid' => 'int',
		'addtime' => 'int',
		'uptime' => 'int'
	];

	protected $fillable = [
		'task_id',
		'spider_name',
		'ip',
		'method',
		'status_code',
		'access_time',
		'web_url',
		'user_agent',
		'nginx_time',
		'http_version',
		'log_content',
		'path',
		'gameid',
		'union_id',
		'url_id',
		'addtime',
		'uptime',
		'site_title',
		'site_domain'
	];
}
