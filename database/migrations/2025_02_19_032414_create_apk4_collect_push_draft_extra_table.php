<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apk4_collect_push_draft_extra', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('draft_id')->default(0)->index('idx_draft_id')->comment('主库游戏id');
            $table->text('index_data_json')->nullable()->comment('数据索引');
            $table->string('index_sn', 500)->default('')->comment('索引序号');
            $table->string('similarity', 1000)->default('')->comment('句子相似度');
            $table->string('content_ids', 1000)->nullable()->default('')->comment('引用内容id');
            $table->text('introduce')->comment('详情内容');
            $table->text('quality_info')->nullable()->comment('质量情况');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_collect_push_draft_extra');
    }
};
