<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4Tag
 * 
 * @property int $id
 * @property string $name
 * @property string $full_name
 * @property string $catalog
 * @property bool $type
 * @property string $title
 * @property string $keyword
 * @property string $description
 * @property string $img
 * @property string $introduce
 * @property int $addtime
 * @property int $uptime
 * @property bool $status
 * @property int $addadmin
 * @property int $upadmin
 * @property int $count
 * @property bool $state
 * @property int $is404
 * @property int|null $game_num
 * @property string|null $game_num_time
 * @property int|null $gameid
 * @property string|null $remark
 * @property string|null $tags
 * @property string|null $remark_tags
 *
 * @package App\Models
 */
class Apk4Tag extends Model
{
	protected $table = 'apk4_tags';
	public $timestamps = false;

	protected $casts = [
		'type' => 'bool',
		'addtime' => 'int',
		'uptime' => 'int',
		'status' => 'bool',
		'addadmin' => 'int',
		'upadmin' => 'int',
		'count' => 'int',
		'state' => 'bool',
		'is404' => 'int',
		'game_num' => 'int',
		'gameid' => 'int'
	];

	protected $fillable = [
		'name',
		'full_name',
		'catalog',
		'type',
		'title',
		'keyword',
		'description',
		'img',
		'introduce',
		'addtime',
		'uptime',
		'status',
		'addadmin',
		'upadmin',
		'count',
		'state',
		'is404',
		'game_num',
		'game_num_time',
		'gameid',
		'remark',
		'tags',
		'remark_tags'
	];
}
