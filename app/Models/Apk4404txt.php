<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4404txt
 * 
 * @property int $id
 * @property string $path
 * @property string $content
 * @property string $domain
 * @property string $fname
 * @property int $addadmin
 * @property int $upadmin
 * @property int $addtime
 * @property int $uptime
 * @property string $bak
 *
 * @package App\Models
 */
class Apk4404txt extends Model
{
	protected $table = 'apk4_404txt';
	public $timestamps = false;

	protected $casts = [
		'addadmin' => 'int',
		'upadmin' => 'int',
		'addtime' => 'int',
		'uptime' => 'int'
	];

	protected $fillable = [
		'path',
		'content',
		'domain',
		'fname',
		'addadmin',
		'upadmin',
		'addtime',
		'uptime',
		'bak'
	];
}
