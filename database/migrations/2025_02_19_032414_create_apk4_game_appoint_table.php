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
        Schema::create('apk4_game_appoint', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('gameid')->comment('游戏id');
            $table->char('mobile', 11)->comment('手机号');
            $table->integer('addtime')->comment('预约时间');
            $table->unsignedInteger('ip')->comment('ip地址');
            $table->boolean('system')->default(false)->comment('系统类型:0-全部,1-ios,2-安卓');
            $table->boolean('classify')->default(true)->comment('预约游戏和app  1和2');

            $table->index(['gameid', 'mobile'], 'gameid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_game_appoint');
    }
};
