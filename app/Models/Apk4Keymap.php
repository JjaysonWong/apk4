<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4Keymap
 * 
 * @property int $id
 * @property string $name
 * @property int|null $sort_order
 * @property bool $status
 * @property int|null $addtime
 * @property int|null $uptime
 * @property int $addadmin
 * @property string|null $addadmin_name
 * @property int $upadmin
 * @property string|null $upadmin_name
 *
 * @package App\Models
 */
class Apk4Keymap extends Model
{
	protected $table = 'apk4_keymap';
	public $timestamps = false;

	protected $casts = [
		'sort_order' => 'int',
		'status' => 'bool',
		'addtime' => 'int',
		'uptime' => 'int',
		'addadmin' => 'int',
		'upadmin' => 'int'
	];

	protected $fillable = [
		'name',
		'sort_order',
		'status',
		'addtime',
		'uptime',
		'addadmin',
		'addadmin_name',
		'upadmin',
		'upadmin_name'
	];
}
