<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4NewsContent
 * 
 * @property int $id
 * @property int $nid
 * @property string $content
 *
 * @package App\Models
 */
class Apk4NewsContent extends Model
{
	protected $table = 'apk4_news_content';
	public $timestamps = false;

	protected $casts = [
		'nid' => 'int'
	];

	protected $fillable = [
		'nid',
		'content'
	];
}
