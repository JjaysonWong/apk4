<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4Forbid
 * 
 * @property int $id
 * @property string $name
 * @property int|null $addtime
 * @property int|null $uptime
 * @property int $addadmin
 * @property int $upadmin
 *
 * @package App\Models
 */
class Apk4Forbid extends Model
{
	protected $table = 'apk4_forbid';
	public $timestamps = false;

	protected $casts = [
		'addtime' => 'int',
		'uptime' => 'int',
		'addadmin' => 'int',
		'upadmin' => 'int'
	];

	protected $fillable = [
		'name',
		'addtime',
		'uptime',
		'addadmin',
		'upadmin'
	];
}
