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
        Schema::create('apk4_comment_list', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('user_id', 32)->comment('用户id');
            $table->string('score', 100)->nullable()->comment('评分');
            $table->text('comment')->comment('评论内容');
            $table->string('user_name')->comment('用户姓名');
            $table->string('user_avater')->nullable()->comment('用户头像');
            $table->boolean('state')->default(true)->comment('是否下架:1-待审核,2-审核通过,3-审核不通过');
            $table->boolean('type')->default(true)->comment('1-资讯 2-游戏');
            $table->integer('platid')->comment('type为1是资讯id type为2是游戏id');
            $table->text('introduce')->nullable()->comment('不通过理由');
            $table->integer('addtime');
            $table->integer('uptime')->nullable();
            $table->integer('upadmin')->default(0)->comment('审核的作者');

            $table->index(['type', 'state'], 'type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_comment_list');
    }
};
