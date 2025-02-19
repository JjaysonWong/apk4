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
        Schema::create('apk4_editor_number_statistics', function (Blueprint $table) {
            $table->integer('id', true);
            $table->date('date')->nullable()->comment('日期');
            $table->integer('editor_id')->default(0)->comment('编辑id');
            $table->string('editor_name', 200)->default('')->comment('编辑名称');
            $table->integer('game_update_number')->default(0)->comment('游戏更新数量');
            $table->integer('app_update_number')->default(0)->comment('应用更新数量');
            $table->integer('all_update_number')->default(0)->comment('总数量');
            $table->integer('game_add_number')->default(0)->comment('游戏新增数量');
            $table->integer('app_add_number')->default(0)->comment('应用新增数量');
            $table->integer('all_add_number')->default(0)->comment('总数量');
            $table->integer('tag_add_number')->default(0)->comment('标签新增数量');
            $table->integer('rank_add_number')->default(0)->comment('排行榜新增数量');
            $table->integer('polycat_add_number')->default(0)->comment('聚合类新增数量');
            $table->integer('news_update_number')->default(0)->comment('新闻更新数量');
            $table->integer('news_add_number')->default(0)->comment('新闻新增数量');
            $table->integer('addtime');
            $table->integer('uptime');

            $table->index(['date', 'editor_id'], 'idx_date_editor_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_editor_number_statistics');
    }
};
