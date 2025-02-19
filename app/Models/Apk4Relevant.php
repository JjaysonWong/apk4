<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4Relevant
 * 
 * @property int $id
 * @property int $gameid
 * @property int $addtime
 * @property int $uptime
 * @property int $addadmin
 * @property int $upadmin
 * @property bool|null $similar_type
 *
 * @package App\Models
 */
class Apk4Relevant extends Model
{
	protected $table = 'apk4_relevant';
	public $timestamps = false;

	protected $casts = [
		'gameid' => 'int',
		'addtime' => 'int',
		'uptime' => 'int',
		'addadmin' => 'int',
		'upadmin' => 'int',
		'similar_type' => 'bool'
	];

	protected $fillable = [
		'gameid',
		'addtime',
		'uptime',
		'addadmin',
		'upadmin',
		'similar_type'
	];
}
