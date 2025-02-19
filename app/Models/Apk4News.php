<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4News
 * 
 * @property int $id
 * @property int $gameid
 * @property string $title
 * @property string $tags
 * @property bool $type
 * @property bool $status
 * @property bool $recom
 * @property string $keyword
 * @property string $list_img
 * @property string $big_img
 * @property string $describe
 * @property string $source
 * @property string $abstract
 * @property int $addtime
 * @property int $uptime
 * @property int $addadmin
 * @property int $upadmin
 * @property int $tview
 * @property int $mview
 * @property int $wview
 * @property int $goods
 * @property int $bads
 * @property string $author
 * @property bool $original
 * @property int $release_time
 * @property bool|null $cooperation
 * @property string|null $seo_title
 * @property string|null $rand_key
 * @property int|null $is_push
 *
 * @package App\Models
 */
class Apk4News extends Model
{
	protected $table = 'apk4_news';
	public $timestamps = false;

	protected $casts = [
		'gameid' => 'int',
		'type' => 'bool',
		'status' => 'bool',
		'recom' => 'bool',
		'addtime' => 'int',
		'uptime' => 'int',
		'addadmin' => 'int',
		'upadmin' => 'int',
		'tview' => 'int',
		'mview' => 'int',
		'wview' => 'int',
		'goods' => 'int',
		'bads' => 'int',
		'original' => 'bool',
		'release_time' => 'int',
		'cooperation' => 'bool',
		'is_push' => 'int'
	];

	protected $fillable = [
		'gameid',
		'title',
		'tags',
		'type',
		'status',
		'recom',
		'keyword',
		'list_img',
		'big_img',
		'describe',
		'source',
		'abstract',
		'addtime',
		'uptime',
		'addadmin',
		'upadmin',
		'tview',
		'mview',
		'wview',
		'goods',
		'bads',
		'author',
		'original',
		'release_time',
		'cooperation',
		'seo_title',
		'rand_key',
		'is_push'
	];
}
