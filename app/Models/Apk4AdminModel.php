<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4AdminModel
 * 
 * @property int $id
 * @property string $name
 * @property string $marks
 * @property int $keys
 * @property string $url
 * @property string $addtime
 * @property bool $is_del
 * @property int|null $sort
 *
 * @package App\Models
 */
class Apk4AdminModel extends Model
{
	protected $table = 'apk4_admin_model';
	public $timestamps = false;

	protected $casts = [
		'keys' => 'int',
		'is_del' => 'bool',
		'sort' => 'int'
	];

	protected $fillable = [
		'name',
		'marks',
		'keys',
		'url',
		'addtime',
		'is_del',
		'sort'
	];
}
