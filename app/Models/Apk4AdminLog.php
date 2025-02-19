<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4AdminLog
 * 
 * @property int $logid
 * @property int $type
 * @property string $dotype
 * @property int $addtime
 * @property string $username
 * @property int $uid
 * @property string $logtext
 *
 * @package App\Models
 */
class Apk4AdminLog extends Model
{
	protected $table = 'apk4_admin_log';
	protected $primaryKey = 'logid';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'addtime' => 'int',
		'uid' => 'int'
	];

	protected $fillable = [
		'type',
		'dotype',
		'addtime',
		'username',
		'uid',
		'logtext'
	];
}
