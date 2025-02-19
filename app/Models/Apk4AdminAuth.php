<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4AdminAuth
 * 
 * @property int $uid
 * @property string $detail
 * @property int $addtime
 * @property int $uptime
 * @property int $adduid
 * @property int $upuid
 *
 * @package App\Models
 */
class Apk4AdminAuth extends Model
{
	protected $table = 'apk4_admin_auth';
	protected $primaryKey = 'uid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'uid' => 'int',
		'addtime' => 'int',
		'uptime' => 'int',
		'adduid' => 'int',
		'upuid' => 'int'
	];

	protected $fillable = [
		'detail',
		'addtime',
		'uptime',
		'adduid',
		'upuid'
	];
}
