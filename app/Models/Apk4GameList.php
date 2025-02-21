<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4GameList
 * 
 * @property int $id
 * @property int $gameid
 * @property string $name
 * @property string $shortname
 * @property string $gamedir
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property int $platid
 * @property int $type
 * @property bool $recom
 * @property bool $status
 * @property string $icon
 * @property string|null $icon_nine
 * @property string $video
 * @property string $video_cover
 * @property int $video_times
 * @property string $comment
 * @property string $introduce
 * @property int $addtime
 * @property int $uptime
 * @property int $addadmin
 * @property int $upadmin
 * @property string $tags
 * @property int $tdown
 * @property int $mview
 * @property int $mdown
 * @property int $wview
 * @property int $wdown
 * @property int $goods
 * @property bool $classify
 * @property bool $state
 * @property int $ydown
 * @property bool|null $game_methon
 * @property float|null $game_score
 * @property string|null $game_comment
 * @property float|null $compute_score
 * @property string|null $safetitle
 * @property bool|null $original
 * @property string|null $cooperation_platform
 * @property bool|null $cooperation
 * @property string|null $rank_en
 * @property string|null $rank_cn
 * @property bool|null $rank_number
 * @property bool|null $is_pack
 * @property int $isshow
 * @property bool|null $is_down
 * @property string|null $union_id
 * @property int $common_id
 * @property string|null $addadmin_name
 * @property string|null $upadmin_name
 * @property int|null $is_push
 * @property string|null $introduce_log
 * @property string|null $history_introduce_log
 * @property string $privacy
 * @property string $icp_code
 * @property string $version_name
 * @property bool $is_360
 * @property string $unique_id
 *
 * @package App\Models
 */
class Apk4GameList extends Model
{
	protected $table = 'apk4_game_list';
	public $timestamps = false;

	protected $casts = [
		'gameid' => 'int',
		'platid' => 'int',
		'type' => 'int',
		'recom' => 'bool',
		'status' => 'bool',
		'video_times' => 'int',
		'addtime' => 'int',
		'uptime' => 'int',
		'addadmin' => 'int',
		'upadmin' => 'int',
		'tdown' => 'int',
		'mview' => 'int',
		'mdown' => 'int',
		'wview' => 'int',
		'wdown' => 'int',
		'goods' => 'int',
		'classify' => 'bool',
		'state' => 'bool',
		'ydown' => 'int',
		'game_methon' => 'bool',
		'game_score' => 'float',
		'compute_score' => 'float',
		'original' => 'bool',
		'cooperation' => 'bool',
		'rank_number' => 'bool',
		'is_pack' => 'bool',
		'isshow' => 'int',
		'is_down' => 'bool',
		'common_id' => 'int',
		'is_push' => 'int',
		'is_360' => 'bool'
	];

	protected $fillable = [
		'gameid',
		'name',
		'shortname',
		'gamedir',
		'title',
		'keywords',
		'description',
		'platid',
		'type',
		'recom',
		'status',
		'icon',
		'icon_nine',
		'video',
		'video_cover',
		'video_times',
		'comment',
		'introduce',
		'addtime',
		'uptime',
		'addadmin',
		'upadmin',
		'tags',
		'tdown',
		'mview',
		'mdown',
		'wview',
		'wdown',
		'goods',
		'classify',
		'state',
		'ydown',
		'game_methon',
		'game_score',
		'game_comment',
		'compute_score',
		'safetitle',
		'original',
		'cooperation_platform',
		'cooperation',
		'rank_en',
		'rank_cn',
		'rank_number',
		'is_pack',
		'isshow',
		'is_down',
		'union_id',
		'common_id',
		'addadmin_name',
		'upadmin_name',
		'is_push',
		'introduce_log',
		'history_introduce_log',
		'privacy',
		'icp_code',
		'version_name',
		'is_360',
		'unique_id'
	];

	public function screenshots()
    {
        return $this->hasMany(Apk4GameImg::class, 'gameid', 'id');
    }
}
