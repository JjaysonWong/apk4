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
        Schema::create('apk4_spider_statistics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path', 30)->default('')->comment('目录');
            $table->string('url_id', 30)->default('')->comment('访问id');
            $table->date('date')->nullable()->comment('日期');
            $table->string('unique_id', 40)->default('')->comment('唯一标识id');
            $table->integer('gameid')->default(0)->comment('游戏id');
            $table->string('union_id', 20)->default('')->comment('联合id');
            $table->string('name', 20)->default('')->comment('软件名称');
            $table->integer('pv')->default(0)->comment('pv');
            $table->integer('uv')->default(0)->comment('uv');
            $table->integer('download')->default(0)->comment('download');
            $table->integer('number_baidu')->default(0)->comment('统计结果-百度');
            $table->integer('number_360')->default(0)->comment('统计结果-360');
            $table->integer('number_sousou')->default(0)->comment('统计结果-搜搜');
            $table->integer('number_sougou')->default(0)->comment('统计结果-搜狗');
            $table->integer('number_shenma')->default(0)->comment('统计结果-神马');
            $table->integer('number_bing')->default(0)->comment('统计结果-bing');
            $table->integer('addtime');
            $table->integer('uptime');
            $table->integer('url_info_id')->default(0)->index('idx_url_info_id')->comment('蜘蛛访问url信息id');

            $table->index(['date', 'unique_id'], 'idx_date_unique_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_spider_statistics');
    }
};
