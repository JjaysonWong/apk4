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
        Schema::create('apk4_news_digg', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('user_id', 32)->comment('用户id');
            $table->boolean('type')->default(true)->comment('1-资讯 2-游戏');
            $table->integer('platid')->comment('type为1是资讯id type为2是游戏id');
            $table->boolean('click_type')->nullable()->default(true)->comment('0 恶心 1愤怒 2强赞 3感动 4路过 5无聊 6雷囧 7关注');
            $table->integer('addtime');

            $table->index(['type', 'platid'], 'type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_news_digg');
    }
};
