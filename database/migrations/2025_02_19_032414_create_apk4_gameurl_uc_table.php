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
        Schema::create('apk4_gameurl_uc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable()->unique('name')->comment('游戏名');
            $table->string('icon')->nullable();
            $table->string('downurl')->nullable()->comment('游戏下载地址');
            $table->string('size')->nullable()->comment('游戏大小');
            $table->string('uld')->nullable()->default('0')->index('uld')->comment('关联gamelist多个用,拼接');
            $table->dateTime('add_at')->nullable();
            $table->string('packsign')->nullable()->comment('签名');
            $table->unsignedInteger('modifytime')->nullable()->default(0)->comment('更新时间');
            $table->string('versionname')->nullable()->comment('版本号');
            $table->unsignedInteger('versioncode')->nullable()->default(0);
            $table->integer('uc_game_id')->nullable()->default(0)->comment('uc游戏id');
            $table->integer('update_at')->nullable()->default(0)->comment('关联时间');
            $table->boolean('is_delete')->nullable()->default(true)->comment('1 未删除 2 已删除');
            $table->boolean('type')->nullable()->default(true)->comment('1:9game');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_gameurl_uc');
    }
};
