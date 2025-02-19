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
        Schema::create('apk4_404txt', function (Blueprint $table) {
            $table->increments('id')->comment('id自增');
            $table->string('path', 100)->comment('服务器文件路径,不带域名');
            $table->longText('content')->comment('不能超过5w条');
            $table->string('domain', 100)->comment('www和m\\wap等');
            $table->string('fname', 50)->comment('404文件名');
            $table->integer('addadmin')->comment('入库管理员');
            $table->integer('upadmin')->comment('最后修改管理员');
            $table->integer('addtime')->comment('添加时间');
            $table->integer('uptime')->comment('修改时间');
            $table->longText('bak')->comment('上一次备份,防丢失');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_404txt');
    }
};
