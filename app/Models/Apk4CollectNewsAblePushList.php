<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4CollectNewsAblePushList
 * 
 * @property int $collect_id
 * @property int $site_id
 * @property bool $type
 * @property Carbon|null $update_time
 * @property int $status
 *
 * @package App\Models
 */
class Apk4CollectNewsAblePushList extends Model
{
	protected $table = 'apk4_collect_news_able_push_list';
	protected $primaryKey = 'collect_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'collect_id' => 'int',
		'site_id' => 'int',
		'type' => 'bool',
		'update_time' => 'datetime',
		'status' => 'int'
	];

	protected $fillable = [
		'site_id',
		'type',
		'update_time',
		'status'
	];
}
