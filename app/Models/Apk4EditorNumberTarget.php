<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4EditorNumberTarget
 * 
 * @property int $id
 * @property int $day_task_number
 * @property int|null $working_day_in_month
 * @property int|null $working_day_in_week
 * @property float $soft_standard_value
 * @property float $polycat_standard_value
 * @property int $addadmin
 * @property int $upadmin
 * @property int $addtime
 * @property int $uptime
 *
 * @package App\Models
 */
class Apk4EditorNumberTarget extends Model
{
	protected $table = 'apk4_editor_number_target';
	public $timestamps = false;

	protected $casts = [
		'day_task_number' => 'int',
		'working_day_in_month' => 'int',
		'working_day_in_week' => 'int',
		'soft_standard_value' => 'float',
		'polycat_standard_value' => 'float',
		'addadmin' => 'int',
		'upadmin' => 'int',
		'addtime' => 'int',
		'uptime' => 'int'
	];

	protected $fillable = [
		'day_task_number',
		'working_day_in_month',
		'working_day_in_week',
		'soft_standard_value',
		'polycat_standard_value',
		'addadmin',
		'upadmin',
		'addtime',
		'uptime'
	];
}
