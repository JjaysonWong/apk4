<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4Batchgenerate
 * 
 * @property int $id
 * @property string $name
 * @property string|null $subject
 * @property string|null $category
 * @property string|null $tags
 * @property int $status
 * @property int|null $addtime
 * @property int|null $uptime
 * @property int $web_id
 * @property int $classify
 * @property int $is_subject
 * @property string $fail_info
 * @property int $subject_id
 * @property int $deltime
 *
 * @package App\Models
 */
class Apk4Batchgenerate extends Model
{
	protected $table = 'apk4_batchgenerate';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'addtime' => 'int',
		'uptime' => 'int',
		'web_id' => 'int',
		'classify' => 'int',
		'is_subject' => 'int',
		'subject_id' => 'int',
		'deltime' => 'int'
	];

	protected $fillable = [
		'name',
		'subject',
		'category',
		'tags',
		'status',
		'addtime',
		'uptime',
		'web_id',
		'classify',
		'is_subject',
		'fail_info',
		'subject_id',
		'deltime'
	];
}
