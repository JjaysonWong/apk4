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
        Schema::create('apk4_game', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('name', 30)->index('index_0')->comment('游戏名称');
            $table->integer('addtime');
            $table->integer('uptime');
            $table->integer('addadmin')->default(0)->comment('添加的作者');
            $table->integer('upadmin')->default(0)->comment('最后修改的作者');
            $table->boolean('status')->default(true)->comment('游戏状态');
            $table->string('tags', 500)->default('')->comment('关联标签id');
            $table->boolean('state')->default(true)->comment('是否下架:1-否,2-是');
            $table->boolean('show_down')->nullable()->default(false)->comment('展示下载聚合页');
            $table->integer('downtime');
            $table->boolean('show_news')->nullable()->default(false)->comment('展示攻略聚合页');
            $table->string('name_catalog', 20)->nullable()->comment('攻略聚合跳转catalog');
            $table->string('plat')->nullable()->comment('厂商');
            $table->tinyInteger('is404')->default(2)->comment('是否需要404');
            $table->string('addadmin_name', 100)->nullable()->comment('添加管理员姓名');
            $table->string('upadmin_name', 100)->nullable()->comment('修改管理员姓名');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_game');
    }
};
