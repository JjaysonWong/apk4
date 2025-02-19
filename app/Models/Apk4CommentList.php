<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4CommentList
 * 
 * @property int $id
 * @property string $user_id
 * @property string|null $score
 * @property string $comment
 * @property string $user_name
 * @property string|null $user_avater
 * @property bool $state
 * @property bool $type
 * @property int $platid
 * @property string|null $introduce
 * @property int $addtime
 * @property int|null $uptime
 * @property int $upadmin
 *
 * @package App\Models
 */
class Apk4CommentList extends Model
{
	protected $table = 'apk4_comment_list';
	public $timestamps = false;

	protected $casts = [
		'state' => 'bool',
		'type' => 'bool',
		'platid' => 'int',
		'addtime' => 'int',
		'uptime' => 'int',
		'upadmin' => 'int'
	];

	protected $fillable = [
		'user_id',
		'score',
		'comment',
		'user_name',
		'user_avater',
		'state',
		'type',
		'platid',
		'introduce',
		'addtime',
		'uptime',
		'upadmin'
	];
}
