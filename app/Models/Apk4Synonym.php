<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4Synonym
 * 
 * @property int $id
 * @property string $match_word
 * @property string $synonym
 * @property int $priority
 * @property int $addtime
 * @property int $uptime
 *
 * @package App\Models
 */
class Apk4Synonym extends Model
{
	protected $table = 'apk4_synonym';
	public $timestamps = false;

	protected $casts = [
		'priority' => 'int',
		'addtime' => 'int',
		'uptime' => 'int'
	];

	protected $fillable = [
		'match_word',
		'synonym',
		'priority',
		'addtime',
		'uptime'
	];
}
