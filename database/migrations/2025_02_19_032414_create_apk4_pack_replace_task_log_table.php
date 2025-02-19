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
        Schema::create('apk4_pack_replace_task_log', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('classify')->default(true)->comment('分类:1-游戏,2-应用');
            $table->boolean('pack_type')->default(true)->comment('分类:1-安卓,2-ios');
            $table->string('old_url', 500)->default('')->comment('原下载地址');
            $table->string('new_url', 500)->default('')->comment('新下载地址');
            $table->integer('number')->default(0)->comment('替换数量');
            $table->integer('addtime');
            $table->integer('uptime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_pack_replace_task_log');
    }
};
