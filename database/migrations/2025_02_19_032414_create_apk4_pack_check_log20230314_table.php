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
        Schema::create('apk4_pack_check_log20230314', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('gameid')->index('gameid')->comment('软件id');
            $table->string('name', 30)->default('')->comment('软件名称');
            $table->string('and_url', 500)->default('')->comment('安卓下载地址');
            $table->boolean('classify')->default(true)->comment('分类:1-游戏,2-应用');
            $table->integer('status_code')->default(0)->comment('响应状态码');
            $table->string('error_msg', 200)->default('')->comment('响应错误');
            $table->integer('checktime')->default(0)->comment('检测下载地址时间');
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
        Schema::dropIfExists('apk4_pack_check_log20230314');
    }
};
