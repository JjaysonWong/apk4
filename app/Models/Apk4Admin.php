<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4Admin
 * 
 * @property int $uid
 * @property string $username
 * @property string $password
 * @property string $tjdm
 * @property string|null $lastip
 * @property string|null $nowip
 * @property int $lasttime
 * @property int $nowtime
 * @property bool $status
 * @property int $logincount
 * @property int $group_id
 * @property int|null $category
 *
 * @package App\Models
 */
class Apk4Admin extends Model
{
	protected $table = 'apk4_admin';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'lasttime' => 'int',
		'nowtime' => 'int',
		'status' => 'bool',
		'logincount' => 'int',
		'group_id' => 'int',
		'category' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'password',
		'tjdm',
		'lastip',
		'nowip',
		'lasttime',
		'nowtime',
		'status',
		'logincount',
		'group_id',
		'category'
	];
}
