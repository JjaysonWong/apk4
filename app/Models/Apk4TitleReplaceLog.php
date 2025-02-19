<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4TitleReplaceLog
 * 
 * @property int $id
 * @property int $gameid
 * @property int $classify
 * @property string|null $original_title
 * @property string|null $new_title
 * @property string $and_url
 * @property int $strategy
 * @property int $addtime
 * @property int $uptime
 *
 * @package App\Models
 */
class Apk4TitleReplaceLog extends Model
{
	protected $table = 'apk4_title_replace_log';
	public $timestamps = false;

	protected $casts = [
		'gameid' => 'int',
		'classify' => 'int',
		'strategy' => 'int',
		'addtime' => 'int',
		'uptime' => 'int'
	];

	protected $fillable = [
		'gameid',
		'classify',
		'original_title',
		'new_title',
		'and_url',
		'strategy',
		'addtime',
		'uptime'
	];
}
