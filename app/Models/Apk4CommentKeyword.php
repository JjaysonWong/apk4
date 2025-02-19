<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4CommentKeyword
 * 
 * @property int $id
 * @property string|null $introduce
 *
 * @package App\Models
 */
class Apk4CommentKeyword extends Model
{
	protected $table = 'apk4_comment_keyword';
	public $timestamps = false;

	protected $fillable = [
		'introduce'
	];
}
