<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4GrabGameList
 * 
 * @property int $id
 * @property string $name
 * @property string $update_description
 * @property string $icon
 * @property string|null $icon_nine
 * @property string $comment
 * @property string $introduce
 * @property string $size
 * @property string $img
 * @property int $addtime
 * @property int $uptime
 * @property string|null $version
 * @property bool|null $classify
 *
 * @package App\Models
 */
class Apk4GrabGameList extends Model
{
	protected $table = 'apk4_grab_game_list';
	public $timestamps = false;

	protected $casts = [
		'addtime' => 'int',
		'uptime' => 'int',
		'classify' => 'bool'
	];

	protected $fillable = [
		'name',
		'update_description',
		'icon',
		'icon_nine',
		'comment',
		'introduce',
		'size',
		'img',
		'addtime',
		'uptime',
		'version',
		'classify'
	];
}
