<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4SpiderUrlInfo
 * 
 * @property int $id
 * @property string $web_url
 * @property string $path
 * @property string $url_id
 * @property string $site_title
 * @property string $site_domain
 * @property string $url_unique_id
 * @property int $addtime
 * @property int $uptime
 *
 * @package App\Models
 */
class Apk4SpiderUrlInfo extends Model
{
	protected $table = 'apk4_spider_url_info';
	public $timestamps = false;

	protected $casts = [
		'addtime' => 'int',
		'uptime' => 'int'
	];

	protected $fillable = [
		'web_url',
		'path',
		'url_id',
		'site_title',
		'site_domain',
		'url_unique_id',
		'addtime',
		'uptime'
	];
}
