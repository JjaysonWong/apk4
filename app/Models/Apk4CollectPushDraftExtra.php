<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apk4CollectPushDraftExtra
 * 
 * @property int $id
 * @property int $draft_id
 * @property array|null $index_data_json
 * @property string $index_sn
 * @property string $similarity
 * @property string|null $content_ids
 * @property string $introduce
 * @property string|null $quality_info
 *
 * @package App\Models
 */
class Apk4CollectPushDraftExtra extends Model
{
	protected $table = 'apk4_collect_push_draft_extra';
	public $timestamps = false;

	protected $casts = [
		'draft_id' => 'int',
		'index_data_json' => 'json'
	];

	protected $fillable = [
		'draft_id',
		'index_data_json',
		'index_sn',
		'similarity',
		'content_ids',
		'introduce',
		'quality_info'
	];
}
