<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4GameurlUc
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $icon
 * @property string|null $downurl
 * @property string|null $size
 * @property string|null $uld
 * @property Carbon|null $add_at
 * @property string|null $packsign
 * @property int|null $modifytime
 * @property string|null $versionname
 * @property int|null $versioncode
 * @property int|null $uc_game_id
 * @property int|null $update_at
 * @property bool|null $is_delete
 * @property bool|null $type
 *
 * @package App\Models
 */
class Apk4GameurlUc extends Model
{
	protected $table = 'apk4_gameurl_uc';
	public $timestamps = false;

	protected $casts = [
		'add_at' => 'datetime',
		'modifytime' => 'int',
		'versioncode' => 'int',
		'uc_game_id' => 'int',
		'update_at' => 'int',
		'is_delete' => 'bool',
		'type' => 'bool'
	];

	protected $fillable = [
		'name',
		'icon',
		'downurl',
		'size',
		'uld',
		'add_at',
		'packsign',
		'modifytime',
		'versionname',
		'versioncode',
		'uc_game_id',
		'update_at',
		'is_delete',
		'type'
	];
}
