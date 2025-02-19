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
        Schema::create('apk4_title_replace_log', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('gameid')->index('gameid')->comment('游戏id');
            $table->tinyInteger('classify')->default(1)->comment('类型 1- 游戏 2-应用');
            $table->string('original_title', 200)->nullable()->default('')->comment('原标题');
            $table->string('new_title', 200)->nullable()->default('')->comment('新标题');
            $table->string('and_url', 500)->default('')->comment('安卓下载地址');
            $table->tinyInteger('strategy')->default(1)->comment('替换策略');
            $table->integer('addtime');
            $table->integer('uptime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_title_replace_log');
    }
};
