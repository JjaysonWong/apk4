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
        Schema::create('apk4_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->comment('简称');
            $table->string('full_name', 50)->comment('全称');
            $table->string('catalog', 20)->comment('目录');
            $table->boolean('type')->default(true)->comment('类型');
            $table->string('title', 100)->default('')->comment('标题');
            $table->string('keyword', 50)->default('')->comment('关键字');
            $table->string('description', 500)->default('')->comment('描述');
            $table->string('img', 150)->default('')->comment('标签图片');
            $table->text('introduce')->comment('简介');
            $table->integer('addtime');
            $table->integer('uptime');
            $table->boolean('status')->default(false)->index('status')->comment('状态:0-正常');
            $table->integer('addadmin')->default(0)->comment('添加的作者');
            $table->integer('upadmin')->default(0)->comment('修改的作者');
            $table->unsignedInteger('count')->default(0)->comment('单击次数');
            $table->boolean('state')->default(true)->comment('是否下架:1-精选,2-热门');
            $table->tinyInteger('is404')->default(2)->comment('是否开启404');
            $table->integer('game_num')->nullable()->default(0)->comment('游戏总数 ');
            $table->string('game_num_time', 20)->nullable()->comment(' 统计游戏总数时间');
            $table->integer('gameid')->nullable()->comment('小编推荐游戏或应用id');
            $table->string('remark')->nullable()->comment('编辑推荐id');
            $table->string('tags', 150)->nullable()->comment('关联标签id');
            $table->string('remark_tags')->nullable()->comment('关联标签关联的游戏');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_tags');
    }
};
