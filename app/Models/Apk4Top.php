<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4Top
 * 
 * @property int $id
 * @property string $name
 * @property string $catalog
 * @property string $title
 * @property string $keyword
 * @property string $describe
 * @property int $sort
 * @property bool $status
 * @property string $gameid
 * @property bool $recom
 * @property string $img
 * @property int $addtime
 * @property int $uptime
 * @property int $addadmin
 * @property int $upadmin
 * @property bool|null $type
 * @property string|null $tags
 * @property string|null $remark_tags
 *
 * @package App\Models
 */
class Apk4Top extends Model
{
	protected $table = 'apk4_top';
	public $timestamps = false;

	protected $casts = [
		'sort' => 'int',
		'status' => 'bool',
		'recom' => 'bool',
		'addtime' => 'int',
		'uptime' => 'int',
		'addadmin' => 'int',
		'upadmin' => 'int',
		'type' => 'bool'
	];

	protected $fillable = [
		'name',
		'catalog',
		'title',
		'keyword',
		'describe',
		'sort',
		'status',
		'gameid',
		'recom',
		'img',
		'addtime',
		'uptime',
		'addadmin',
		'upadmin',
		'type',
		'tags',
		'remark_tags'
	];
}
