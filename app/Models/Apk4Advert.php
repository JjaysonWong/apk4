<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4Advert
 * 
 * @property int $id
 * @property string $group
 * @property bool $adtype
 * @property string|null $codes
 * @property bool $num
 * @property int $uid
 * @property string $addtime
 * @property bool $is_del
 *
 * @package App\Models
 */
class Apk4Advert extends Model
{
	protected $table = 'apk4_advert';
	public $timestamps = false;

	protected $casts = [
		'adtype' => 'bool',
		'num' => 'bool',
		'uid' => 'int',
		'is_del' => 'bool'
	];

	protected $fillable = [
		'group',
		'adtype',
		'codes',
		'num',
		'uid',
		'addtime',
		'is_del'
	];
}
