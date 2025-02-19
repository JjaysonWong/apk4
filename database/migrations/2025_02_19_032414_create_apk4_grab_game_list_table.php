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
        Schema::create('apk4_grab_game_list', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('name', 60)->index('name')->comment('游戏名称');
            $table->string('update_description', 500)->comment('更新内容');
            $table->string('icon')->comment('icon图片');
            $table->string('icon_nine')->nullable()->comment('logo 90*90');
            $table->string('comment')->default('')->comment('点评');
            $table->text('introduce')->comment('游戏介绍');
            $table->string('size')->comment('大小');
            $table->text('img')->comment('截图');
            $table->integer('addtime');
            $table->integer('uptime');
            $table->string('version')->nullable()->comment('版本号');
            $table->boolean('classify')->nullable()->default(true)->comment('1 游戏 2 应用');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_grab_game_list');
    }
};
