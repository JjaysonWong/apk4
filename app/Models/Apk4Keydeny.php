<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4Keydeny
 * 
 * @property int $id
 * @property string $name
 * @property int $site
 * @property string $key_word_id
 * @property bool $status
 * @property string $area
 * @property string $url
 * @property string $time_solt
 * @property int|null $addtime
 * @property int|null $uptime
 * @property int $addadmin
 * @property string|null $addadmin_name
 * @property int $upadmin
 * @property string|null $upadmin_name
 *
 * @package App\Models
 */
class Apk4Keydeny extends Model
{
	protected $table = 'apk4_keydeny';
	public $timestamps = false;

	protected $casts = [
		'site' => 'int',
		'status' => 'bool',
		'addtime' => 'int',
		'uptime' => 'int',
		'addadmin' => 'int',
		'upadmin' => 'int'
	];

	protected $fillable = [
		'name',
		'site',
		'key_word_id',
		'status',
		'area',
		'url',
		'time_solt',
		'addtime',
		'uptime',
		'addadmin',
		'addadmin_name',
		'upadmin',
		'upadmin_name'
	];
}
