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
        Schema::create('apk4_relevant_content', function (Blueprint $table) {
            $table->unsignedMediumInteger('gameid')->default(0)->index('gameid')->comment('主攻略相关id');
            $table->integer('addtime');
            $table->integer('uptime');
            $table->smallInteger('addadmin')->comment('首次添加的管理员id');
            $table->smallInteger('upadmin')->comment('最后修改的管理员id');
            $table->string('title')->default('')->comment('标题');
            $table->string('relevant', 100)->nullable()->default('1,2')->comment('关联标签');
            $table->text('pc_introduce')->comment('pc游戏介绍');
            $table->text('m_introduce')->comment('m游戏介绍');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_relevant_content');
    }
};
