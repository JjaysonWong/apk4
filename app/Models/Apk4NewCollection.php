<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4NewCollection
 * 
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property string $icon
 * @property string $type
 * @property string $tag
 * @property string $img
 * @property string|null $content
 * @property string|null $update_content
 * @property string $and_size
 * @property string $and_ver
 * @property string $ios_size
 * @property string $ios_ver
 * @property string $firm
 * @property int $addtime
 * @property int $update_time
 * @property int $classify
 * @property string $source
 * @property string $url
 * @property int $is_storage
 * @property int $storage_time
 * @property string|null $and_url
 * @property string|null $update_content_title
 * @property bool|null $update_status
 * @property string|null $master_ids
 * @property int|null $update_at
 * @property bool|null $is_pull
 * @property string|null $privacy_policy
 * @property string|null $plat_name
 * @property string|null $record_number
 *
 * @package App\Models
 */
class Apk4NewCollection extends Model
{
	protected $table = 'apk4_new_collection';
	public $timestamps = false;

	protected $casts = [
		'addtime' => 'int',
		'update_time' => 'int',
		'classify' => 'int',
		'is_storage' => 'int',
		'storage_time' => 'int',
		'update_status' => 'bool',
		'update_at' => 'int',
		'is_pull' => 'bool'
	];

	protected $fillable = [
		'name',
		'title',
		'keywords',
		'description',
		'icon',
		'type',
		'tag',
		'img',
		'content',
		'update_content',
		'and_size',
		'and_ver',
		'ios_size',
		'ios_ver',
		'firm',
		'addtime',
		'update_time',
		'classify',
		'source',
		'url',
		'is_storage',
		'storage_time',
		'and_url',
		'update_content_title',
		'update_status',
		'master_ids',
		'update_at',
		'is_pull',
		'privacy_policy',
		'plat_name',
		'record_number'
	];
}
