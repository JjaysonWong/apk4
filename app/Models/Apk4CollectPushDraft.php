<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4CollectPushDraft
 * 
 * @property int $id
 * @property int $gameid
 * @property string $name
 * @property string $subject
 * @property string $gamedir
 * @property string $title
 * @property string $seo_title
 * @property string $keywords
 * @property string $description
 * @property int $type
 * @property bool $status
 * @property string $icon
 * @property string $video
 * @property string $video_cover
 * @property int $video_times
 * @property string $comment
 * @property int $addadmin
 * @property int $upadmin
 * @property string|null $addadmin_name
 * @property string|null $upadmin_name
 * @property string $tags
 * @property bool $classify
 * @property string|null $game_comment
 * @property bool|null $original
 * @property string|null $union_id
 * @property int|null $common_id
 * @property int $web_id
 * @property int $master_id
 * @property string $and_ver
 * @property float|null $and_size
 * @property string $and_url
 * @property bool $and_unit
 * @property int $addtime
 * @property int $uptime
 * @property int $deltime
 * @property int $subject_id
 * @property string $and_pkgname
 * @property string $and_md5
 * @property int $pkg_id
 * @property string $screen_shot_imgs
 * @property bool $push_status
 * @property int|null $push_time
 * @property string $shortname
 * @property int $push_type
 * @property array $error_json
 * @property int $check_status
 * @property string $error_hint
 * @property Carbon|null $auto_push_time
 * @property string|null $push_error_msg
 * @property int $generate_rule_type
 * @property int $template_id
 * @property int $template_version
 * @property int $fix_subject_id
 * @property float $max_similarity
 * @property float $spend_time
 * @property float $quality_score
 *
 * @package App\Models
 */
class Apk4CollectPushDraft extends Model
{
	protected $table = 'apk4_collect_push_draft';
	public $timestamps = false;

	protected $casts = [
		'gameid' => 'int',
		'type' => 'int',
		'status' => 'bool',
		'video_times' => 'int',
		'addadmin' => 'int',
		'upadmin' => 'int',
		'classify' => 'bool',
		'original' => 'bool',
		'common_id' => 'int',
		'web_id' => 'int',
		'master_id' => 'int',
		'and_size' => 'float',
		'and_unit' => 'bool',
		'addtime' => 'int',
		'uptime' => 'int',
		'deltime' => 'int',
		'subject_id' => 'int',
		'pkg_id' => 'int',
		'push_status' => 'bool',
		'push_time' => 'int',
		'push_type' => 'int',
		'error_json' => 'json',
		'check_status' => 'int',
		'auto_push_time' => 'datetime',
		'generate_rule_type' => 'int',
		'template_id' => 'int',
		'template_version' => 'int',
		'fix_subject_id' => 'int',
		'max_similarity' => 'float',
		'spend_time' => 'float',
		'quality_score' => 'float'
	];

	protected $fillable = [
		'gameid',
		'name',
		'subject',
		'gamedir',
		'title',
		'seo_title',
		'keywords',
		'description',
		'type',
		'status',
		'icon',
		'video',
		'video_cover',
		'video_times',
		'comment',
		'addadmin',
		'upadmin',
		'addadmin_name',
		'upadmin_name',
		'tags',
		'classify',
		'game_comment',
		'original',
		'union_id',
		'common_id',
		'web_id',
		'master_id',
		'and_ver',
		'and_size',
		'and_url',
		'and_unit',
		'addtime',
		'uptime',
		'deltime',
		'subject_id',
		'and_pkgname',
		'and_md5',
		'pkg_id',
		'screen_shot_imgs',
		'push_status',
		'push_time',
		'shortname',
		'push_type',
		'error_json',
		'check_status',
		'error_hint',
		'auto_push_time',
		'push_error_msg',
		'generate_rule_type',
		'template_id',
		'template_version',
		'fix_subject_id',
		'max_similarity',
		'spend_time',
		'quality_score'
	];
}
