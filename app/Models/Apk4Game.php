<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4Game
 * 
 * @property int $id
 * @property string $name
 * @property int $addtime
 * @property int $uptime
 * @property int $addadmin
 * @property int $upadmin
 * @property bool $status
 * @property string $tags
 * @property bool $state
 * @property bool|null $show_down
 * @property int $downtime
 * @property bool|null $show_news
 * @property string|null $name_catalog
 * @property string|null $plat
 * @property int $is404
 * @property string|null $addadmin_name
 * @property string|null $upadmin_name
 *
 * @package App\Models
 */
class Apk4Game extends Model
{
	protected $table = 'apk4_game';
	public $timestamps = false;

	protected $casts = [
		'addtime' => 'int',
		'uptime' => 'int',
		'addadmin' => 'int',
		'upadmin' => 'int',
		'status' => 'bool',
		'state' => 'bool',
		'show_down' => 'bool',
		'downtime' => 'int',
		'show_news' => 'bool',
		'is404' => 'int'
	];

	protected $fillable = [
		'name',
		'addtime',
		'uptime',
		'addadmin',
		'upadmin',
		'status',
		'tags',
		'state',
		'show_down',
		'downtime',
		'show_news',
		'name_catalog',
		'plat',
		'is404',
		'addadmin_name',
		'upadmin_name'
	];
}
