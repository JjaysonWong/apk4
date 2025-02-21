<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4GameImg
 * 
 * @property int $id
 * @property int $gameid
 * @property string $path
 * @property bool $status
 * @property int $addtime
 * @property int $addadmin
 *
 * @package App\Models
 */
class Apk4GameImg extends Model
{
	protected $table = 'apk4_game_img';
	public $timestamps = false;

	protected $casts = [
		'gameid' => 'int',
		'status' => 'bool',
		'addtime' => 'int',
		'addadmin' => 'int'
	];

	protected $fillable = [
		'gameid',
		'path',
		'status',
		'addtime',
		'addadmin'
	];

	public function game()
    {
        return $this->belongsTo(Apk4GameList::class, 'gameid', 'id');
    }
}
