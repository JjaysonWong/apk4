<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4SysConf
 * 
 * @property int $id
 * @property int $game_review
 * @property int $app_review
 * @property int $article_review
 * @property int $uptime
 * @property int $upadmin
 * @property string|null $content
 *
 * @package App\Models
 */
class Apk4SysConf extends Model
{
	protected $table = 'apk4_sys_conf';
	public $timestamps = false;

	protected $casts = [
		'game_review' => 'int',
		'app_review' => 'int',
		'article_review' => 'int',
		'uptime' => 'int',
		'upadmin' => 'int'
	];

	protected $fillable = [
		'game_review',
		'app_review',
		'article_review',
		'uptime',
		'upadmin',
		'content'
	];
}
