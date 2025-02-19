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
        Schema::create('apk4_sys_conf', function (Blueprint $table) {
            $table->integer('id', true);
            $table->tinyInteger('game_review')->default(1)->comment('游戏审核:1-开,2-关');
            $table->tinyInteger('app_review')->default(1)->comment('应用审核:1-开,2-关');
            $table->tinyInteger('article_review')->default(1)->comment('文章审核:1-开,2-关');
            $table->unsignedInteger('uptime');
            $table->integer('upadmin')->default(0)->comment('最后修改的作者');
            $table->text('content')->nullable()->comment('公告内容');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_sys_conf');
    }
};
