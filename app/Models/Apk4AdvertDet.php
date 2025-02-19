<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4AdvertDet
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
 * @property bool $is_del
 *
 * @package App\Models
 */
class Apk4AdvertDet extends Model
{
	protected $table = 'apk4_advert_det';
	public $timestamps = false;

	protected $casts = [
		'adid' => 'int',
		'status' => 'bool',
		'no' => 'int',
		'uid' => 'int',
		'hlight' => 'int',
		'is_del' => 'bool'
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
		'is_del'
	];
}
