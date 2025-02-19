<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4GamePack
 * 
 * @property int $id
 * @property int $gameid
 * @property string $and_ver
 * @property float|null $and_size
 * @property string $and_url
 * @property bool $and_unit
 * @property string $ios_ver
 * @property float|null $ios_size
 * @property string $ios_url
 * @property bool $ios_unit
 * @property int $addtime
 * @property int $uptime
 * @property int $checktime
 * @property bool $and_lock
 * @property bool $ios_lock
 * @property string $pc_url
 * @property bool|null $flag
 * @property string|null $and_md5
 * @property string|null $and_pkgname
 * @property int $empty_replace_time
 * @property string|null $and_url_buss
 *
 * @package App\Models
 */
class Apk4GamePack extends Model
{
	protected $table = 'apk4_game_pack';
	public $timestamps = false;

	protected $casts = [
		'gameid' => 'int',
		'and_size' => 'float',
		'and_unit' => 'bool',
		'ios_size' => 'float',
		'ios_unit' => 'bool',
		'addtime' => 'int',
		'uptime' => 'int',
		'checktime' => 'int',
		'and_lock' => 'bool',
		'ios_lock' => 'bool',
		'flag' => 'bool',
		'empty_replace_time' => 'int'
	];

	protected $fillable = [
		'gameid',
		'and_ver',
		'and_size',
		'and_url',
		'and_unit',
		'ios_ver',
		'ios_size',
		'ios_url',
		'ios_unit',
		'addtime',
		'uptime',
		'checktime',
		'and_lock',
		'ios_lock',
		'pc_url',
		'flag',
		'and_md5',
		'and_pkgname',
		'empty_replace_time',
		'and_url_buss'
	];
}
