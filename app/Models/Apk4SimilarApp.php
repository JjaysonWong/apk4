<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4SimilarApp
 * 
 * @property int $fid
 * @property bool $classify
 * @property int $sid
 *
 * @package App\Models
 */
class Apk4SimilarApp extends Model
{
	protected $table = 'apk4_similar_app';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fid' => 'int',
		'classify' => 'bool',
		'sid' => 'int'
	];

	protected $fillable = [
		'fid',
		'classify',
		'sid'
	];
}
