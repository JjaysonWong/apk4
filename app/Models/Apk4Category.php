<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4Category
 * 
 * @property int $id
 * @property string $name
 * @property string $catalog
 * @property string $seo_title
 * @property string $seo_keywords
 * @property string|null $seo_description
 * @property int $pid
 * @property int|null $sort_order
 * @property int $addtime
 * @property int $uptime
 * @property bool $status
 * @property int $addadmin
 * @property int $upadmin
 * @property bool|null $classify
 * @property int $is404
 *
 * @package App\Models
 */
class Apk4Category extends Model
{
	protected $table = 'apk4_category';
	public $timestamps = false;

	protected $casts = [
		'pid' => 'int',
		'sort_order' => 'int',
		'addtime' => 'int',
		'uptime' => 'int',
		'status' => 'bool',
		'addadmin' => 'int',
		'upadmin' => 'int',
		'classify' => 'int',
		'is404' => 'int'
	];

	protected $fillable = [
		'name',
		'catalog',
		'seo_title',
		'seo_keywords',
		'seo_description',
		'pid',
		'sort_order',
		'addtime',
		'uptime',
		'status',
		'addadmin',
		'upadmin',
		'classify',
		'is404'
	];
}
