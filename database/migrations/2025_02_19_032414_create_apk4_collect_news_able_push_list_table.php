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
        Schema::create('apk4_collect_news_able_push_list', function (Blueprint $table) {
            $table->integer('collect_id')->default(0)->primary()->comment('采集id');
            $table->integer('site_id')->default(0)->comment('站点id');
            $table->boolean('type')->default(true)->comment('新闻类型  1-攻略 2-新闻 3-软件教程');
            $table->dateTime('update_time')->nullable()->comment('文章更新时间');
            $table->tinyInteger('status')->default(0)->comment('是否已推送  0 - 否 1-是');

            $table->index(['site_id', 'update_time'], 'idx_site_update_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_collect_news_able_push_list');
    }
};
