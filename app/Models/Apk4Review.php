<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4Review
 * 
 * @property int $id
 * @property int $sid
 * @property int $type
 * @property string $remark
 * @property int $status
 * @property int $addtime
 * @property int $uptime
 * @property int $addadmin
 * @property int $upadmin
 *
 * @package App\Models
 */
class Apk4Review extends Model
{
	protected $table = 'apk4_review';
	public $timestamps = false;

	protected $casts = [
		'sid' => 'int',
		'type' => 'int',
		'status' => 'int',
		'addtime' => 'int',
		'uptime' => 'int',
		'addadmin' => 'int',
		'upadmin' => 'int'
	];

	protected $fillable = [
		'sid',
		'type',
		'remark',
		'status',
		'addtime',
		'uptime',
		'addadmin',
		'upadmin'
	];
}
