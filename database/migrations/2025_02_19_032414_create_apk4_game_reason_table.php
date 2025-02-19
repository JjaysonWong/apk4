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
        Schema::create('apk4_game_reason', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->integer('game_id')->comment('游戏id');
            $table->char('phone', 11)->comment('手机/qq号码');
            $table->string('ip', 150)->nullable()->comment('ip地址');
            $table->integer('addtime');
            $table->integer('uptime');
            $table->string('game_name')->comment('游戏名称');
            $table->char('system', 32)->comment('预约系统名称');
            $table->text('remake')->nullable()->comment('其他原因');
            $table->string('reason')->nullable()->comment('反馈原因 1.有色情、暴力、反动等不良内容
2.有抄袭、侵权嫌疑
3.广告很多、含有不良插件
4.无法正常安装或进入游戏');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_game_reason');
    }
};
