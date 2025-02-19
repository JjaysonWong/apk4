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
        Schema::create('apk4_game_reservation', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->integer('game_id')->comment('游戏id');
            $table->char('phone', 11)->comment('手机号码');
            $table->string('ip', 150)->nullable()->comment('ip地址');
            $table->integer('addtime');
            $table->integer('uptime');
            $table->string('game_name')->comment('游戏名称');
            $table->char('system', 32)->comment('预约系统名称');
            $table->boolean('classify')->nullable()->comment('1游戏 2应用');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_game_reservation');
    }
};
