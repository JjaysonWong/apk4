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
        Schema::create('apk4_plat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->comment('名称');
            $table->string('sname', 20)->comment('简称');
            $table->string('website')->comment('网址');
            $table->unsignedInteger('repid')->comment('代表作游戏id');
            $table->string('img')->default('')->comment('图片');
            $table->string('img_url')->default('')->comment('外部图片地址');
            $table->text('intro')->comment('简介');
            $table->boolean('status')->comment('状态:1-普通,2-热门,3-推荐,4-停止');
            $table->integer('addtime');
            $table->integer('uptime');
            $table->smallInteger('adminid')->nullable();
            $table->string('plat_url')->comment('厂商url');
            $table->string('version_name')->comment('版号');
            $table->string('privacy')->comment('隐私url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_plat');
    }
};
