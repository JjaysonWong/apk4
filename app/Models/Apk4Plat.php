<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4Plat
 * 
 * @property int $id
 * @property string $name
 * @property string $sname
 * @property string $website
 * @property int $repid
 * @property string $img
 * @property string $img_url
 * @property string $intro
 * @property bool $status
 * @property int $addtime
 * @property int $uptime
 * @property int|null $adminid
 * @property string $plat_url
 * @property string $version_name
 * @property string $privacy
 *
 * @package App\Models
 */
class Apk4Plat extends Model
{
	protected $table = 'apk4_plat';
	public $timestamps = false;

	protected $casts = [
		'repid' => 'int',
		'status' => 'bool',
		'addtime' => 'int',
		'uptime' => 'int',
		'adminid' => 'int'
	];

	protected $fillable = [
		'name',
		'sname',
		'website',
		'repid',
		'img',
		'img_url',
		'intro',
		'status',
		'addtime',
		'uptime',
		'adminid',
		'plat_url',
		'version_name',
		'privacy'
	];
}
