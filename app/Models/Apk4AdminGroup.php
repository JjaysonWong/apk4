<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4AdminGroup
 * 
 * @property int $id
 * @property string $title
 * @property string|null $detail
 * @property bool $status
 * @property int $addtime
 * @property int $uptime
 * @property int|null $sort
 *
 * @package App\Models
 */
class Apk4AdminGroup extends Model
{
	protected $table = 'apk4_admin_group';
	public $timestamps = false;

	protected $casts = [
		'status' => 'bool',
		'addtime' => 'int',
		'uptime' => 'int',
		'sort' => 'int'
	];

	protected $fillable = [
		'title',
		'detail',
		'status',
		'addtime',
		'uptime',
		'sort'
	];
}
