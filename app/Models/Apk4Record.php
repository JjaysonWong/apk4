<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4Record
 * 
 * @property int $id
 * @property int $project_id
 * @property string $project_name
 * @property string|null $project_type
 * @property string $project_cate
 * @property int $project_category
 * @property string $link_type
 * @property string $link_url
 * @property int $material_id
 * @property int $publisher_id
 * @property string $user_client
 * @property string $user_agent
 * @property int $ip_int
 * @property string $ip
 * @property Carbon $time
 * @property string $platform_chars
 * @property string $editor
 * @property string $site
 * @property int $behavior
 * @property string $country
 * @property string $province
 * @property string $city
 * @property string $country_id
 * @property int $province_id
 * @property int $city_id
 * @property int $down_type
 * @property int|null $batch_id
 * @property bool|null $is_push
 *
 * @package App\Models
 */
class Apk4Record extends Model
{
	protected $table = 'apk4_record';
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'project_category' => 'int',
		'material_id' => 'int',
		'publisher_id' => 'int',
		'ip_int' => 'int',
		'time' => 'datetime',
		'behavior' => 'int',
		'province_id' => 'int',
		'city_id' => 'int',
		'down_type' => 'int',
		'batch_id' => 'int',
		'is_push' => 'bool'
	];

	protected $fillable = [
		'project_id',
		'project_name',
		'project_type',
		'project_cate',
		'project_category',
		'link_type',
		'link_url',
		'material_id',
		'publisher_id',
		'user_client',
		'user_agent',
		'ip_int',
		'ip',
		'time',
		'platform_chars',
		'editor',
		'site',
		'behavior',
		'country',
		'province',
		'city',
		'country_id',
		'province_id',
		'city_id',
		'down_type',
		'batch_id',
		'is_push'
	];
}
