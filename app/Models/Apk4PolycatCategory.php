<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4PolycatCategory
 * 
 * @property int $id
 * @property int|null $pid
 * @property string $name
 * @property string $catalog
 * @property string $catalog_key
 * @property string $seo_title
 * @property string $seo_keywords
 * @property string|null $seo_description
 * @property int|null $sort_order
 * @property int $addtime
 * @property int $uptime
 * @property bool $status
 * @property int $addadmin
 * @property int $upadmin
 *
 * @package App\Models
 */
class Apk4PolycatCategory extends Model
{
	protected $table = 'apk4_polycat_category';
	public $timestamps = false;

	protected $casts = [
		'pid' => 'int',
		'sort_order' => 'int',
		'addtime' => 'int',
		'uptime' => 'int',
		'status' => 'bool',
		'addadmin' => 'int',
		'upadmin' => 'int'
	];

	protected $fillable = [
		'pid',
		'name',
		'catalog',
		'catalog_key',
		'seo_title',
		'seo_keywords',
		'seo_description',
		'sort_order',
		'addtime',
		'uptime',
		'status',
		'addadmin',
		'upadmin'
	];
}
