<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4Advertpic
 * 
 * @property int $id
 * @property int $adid
 * @property string|null $describe
 * @property string|null $url
 * @property string|null $img
 * @property bool $status
 * @property string|null $remark
 * @property int $no
 * @property int $uid
 * @property string $addtime
 * @property int|null $hlight
 * @property int|null $gid
 * @property bool $is_del
 * @property bool|null $type
 *
 * @package App\Models
 */
class Apk4Advertpic extends Model
{
	protected $table = 'apk4_advertpic';
	public $timestamps = false;

	protected $casts = [
		'adid' => 'int',
		'status' => 'bool',
		'no' => 'int',
		'uid' => 'int',
		'hlight' => 'int',
		'gid' => 'int',
		'is_del' => 'bool',
		'type' => 'bool'
	];

	protected $fillable = [
		'adid',
		'describe',
		'url',
		'img',
		'status',
		'remark',
		'no',
		'uid',
		'addtime',
		'hlight',
		'gid',
		'is_del',
		'type'
	];
}
