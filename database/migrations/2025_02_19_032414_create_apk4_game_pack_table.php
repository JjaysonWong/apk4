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
        Schema::create('apk4_game_pack', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('gameid')->index('gameid')->comment('游戏id');
            $table->string('and_ver', 30)->default('')->comment('安卓版本号');
            $table->decimal('and_size', 10)->nullable()->comment('安卓包大小');
            $table->string('and_url', 500)->default('')->comment('安卓下载地址');
            $table->boolean('and_unit')->default(true)->comment('安卓下载包单位');
            $table->string('ios_ver', 30)->default('')->comment('ios版本号');
            $table->decimal('ios_size', 10)->nullable()->comment('ios包大小');
            $table->string('ios_url', 500)->default('')->comment('ios下载地址');
            $table->boolean('ios_unit')->default(true)->comment('ios下载包单位');
            $table->integer('addtime');
            $table->integer('uptime');
            $table->integer('checktime')->default(0)->comment('检测下载地址404的时间');
            $table->boolean('and_lock')->default(false)->comment('安卓地址锁定:0-否');
            $table->boolean('ios_lock')->default(false)->comment('ios地址锁定:0-否');
            $table->string('pc_url', 500)->default('https://s.syzs.qq.com/channel/6/5898/anzhuang_1000208037.exe')->comment('pc下载地址');
            $table->boolean('flag')->nullable()->default(false)->comment('0  1表示编辑添加过下载包的次数');
            $table->string('and_md5', 32)->nullable()->comment('包md5');
            $table->string('and_pkgname')->nullable()->comment('包名');
            $table->integer('empty_replace_time')->default(0)->index('idx_empty_replace_time')->comment('软件包空替换时间');
            $table->string('and_url_buss', 500)->nullable()->comment('shagnwu包');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_game_pack');
    }
};
