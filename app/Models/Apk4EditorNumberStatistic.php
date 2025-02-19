<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4EditorNumberStatistic
 * 
 * @property int $id
 * @property Carbon|null $date
 * @property int $editor_id
 * @property string $editor_name
 * @property int $game_update_number
 * @property int $app_update_number
 * @property int $all_update_number
 * @property int $game_add_number
 * @property int $app_add_number
 * @property int $all_add_number
 * @property int $tag_add_number
 * @property int $rank_add_number
 * @property int $polycat_add_number
 * @property int $news_update_number
 * @property int $news_add_number
 * @property int $addtime
 * @property int $uptime
 *
 * @package App\Models
 */
class Apk4EditorNumberStatistic extends Model
{
	protected $table = 'apk4_editor_number_statistics';
	public $timestamps = false;

	protected $casts = [
		'date' => 'datetime',
		'editor_id' => 'int',
		'game_update_number' => 'int',
		'app_update_number' => 'int',
		'all_update_number' => 'int',
		'game_add_number' => 'int',
		'app_add_number' => 'int',
		'all_add_number' => 'int',
		'tag_add_number' => 'int',
		'rank_add_number' => 'int',
		'polycat_add_number' => 'int',
		'news_update_number' => 'int',
		'news_add_number' => 'int',
		'addtime' => 'int',
		'uptime' => 'int'
	];

	protected $fillable = [
		'date',
		'editor_id',
		'editor_name',
		'game_update_number',
		'app_update_number',
		'all_update_number',
		'game_add_number',
		'app_add_number',
		'all_add_number',
		'tag_add_number',
		'rank_add_number',
		'polycat_add_number',
		'news_update_number',
		'news_add_number',
		'addtime',
		'uptime'
	];
}
