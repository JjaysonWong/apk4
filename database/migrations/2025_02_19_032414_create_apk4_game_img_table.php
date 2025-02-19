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
        Schema::create('apk4_game_img', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('gameid')->comment('游戏id');
            $table->string('path')->comment('图片路径');
            $table->boolean('status')->default(true)->comment('状态');
            $table->integer('addtime')->comment('添加时间');
            $table->integer('addadmin')->default(0)->comment('添加的作者');

            $table->index(['gameid', 'status'], 'gameid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_game_img');
    }
};
