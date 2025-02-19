<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4SpiderStatistic
 * 
 * @property int $id
 * @property string $path
 * @property string $url_id
 * @property Carbon|null $date
 * @property string $unique_id
 * @property int $gameid
 * @property string $union_id
 * @property string $name
 * @property int $pv
 * @property int $uv
 * @property int $download
 * @property int $number_baidu
 * @property int $number_360
 * @property int $number_sousou
 * @property int $number_sougou
 * @property int $number_shenma
 * @property int $number_bing
 * @property int $addtime
 * @property int $uptime
 * @property int $url_info_id
 *
 * @package App\Models
 */
class Apk4SpiderStatistic extends Model
{
	protected $table = 'apk4_spider_statistics';
	public $timestamps = false;

	protected $casts = [
		'date' => 'datetime',
		'gameid' => 'int',
		'pv' => 'int',
		'uv' => 'int',
		'download' => 'int',
		'number_baidu' => 'int',
		'number_360' => 'int',
		'number_sousou' => 'int',
		'number_sougou' => 'int',
		'number_shenma' => 'int',
		'number_bing' => 'int',
		'addtime' => 'int',
		'uptime' => 'int',
		'url_info_id' => 'int'
	];

	protected $fillable = [
		'path',
		'url_id',
		'date',
		'unique_id',
		'gameid',
		'union_id',
		'name',
		'pv',
		'uv',
		'download',
		'number_baidu',
		'number_360',
		'number_sousou',
		'number_sougou',
		'number_shenma',
		'number_bing',
		'addtime',
		'uptime',
		'url_info_id'
	];
}
