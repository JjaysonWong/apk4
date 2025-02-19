<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4RelevantContent
 * 
 * @property int $gameid
 * @property int $addtime
 * @property int $uptime
 * @property int $addadmin
 * @property int $upadmin
 * @property string $title
 * @property string|null $relevant
 * @property string $pc_introduce
 * @property string $m_introduce
 *
 * @package App\Models
 */
class Apk4RelevantContent extends Model
{
	protected $table = 'apk4_relevant_content';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'gameid' => 'int',
		'addtime' => 'int',
		'uptime' => 'int',
		'addadmin' => 'int',
		'upadmin' => 'int'
	];

	protected $fillable = [
		'gameid',
		'addtime',
		'uptime',
		'addadmin',
		'upadmin',
		'title',
		'relevant',
		'pc_introduce',
		'm_introduce'
	];
}
