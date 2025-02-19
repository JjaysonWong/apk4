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
        Schema::create('apk4_top', function (Blueprint $table) {
            $table->smallInteger('id', true);
            $table->string('name', 30)->comment('名称');
            $table->string('catalog', 30)->comment('目录');
            $table->string('title', 100)->comment('标题');
            $table->string('keyword', 100)->comment('关键字');
            $table->text('describe')->comment('描述');
            $table->unsignedSmallInteger('sort')->default(0)->comment('排序');
            $table->boolean('status')->default(true)->index('status')->comment('状态:1-显示');
            $table->string('gameid', 200)->comment('游戏id英文,拼接');
            $table->boolean('recom')->default(true)->comment('推荐');
            $table->string('img')->default('')->comment('图片');
            $table->integer('addtime');
            $table->integer('uptime')->comment('添加的作者');
            $table->integer('addadmin')->default(0)->comment('添加的作者');
            $table->integer('upadmin')->default(0)->comment('修改的作者');
            $table->boolean('type')->nullable()->default(true)->comment('1游戏 2应用');
            $table->string('tags')->nullable()->comment('关联标签id');
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
        Schema::dropIfExists('apk4_top');
    }
};
