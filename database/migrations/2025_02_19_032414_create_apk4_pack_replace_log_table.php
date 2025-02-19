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
        Schema::create('apk4_pack_replace_log', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('check_id')->comment('检查id');
            $table->unsignedInteger('gameid')->index('idx_gameid')->comment('软件id');
            $table->boolean('classify')->default(true)->comment('分类:1-游戏,2-应用');
            $table->string('name', 30)->default('')->comment('软件名称');
            $table->string('old_and_url', 500)->default('')->comment('原安卓下载地址');
            $table->string('new_and_url', 500)->default('')->comment('新安卓下载地址');
            $table->date('date')->nullable()->comment('替换日期');
            $table->string('old_pack_info', 1000)->default('')->comment('原包信息');
            $table->string('new_pack_info', 1000)->default('')->comment('新包信息');
            $table->tinyInteger('status')->default(0)->comment('状态 0 -未替换 1-成功匹配并替换  2-匹配失败空替换');
            $table->tinyInteger('type')->nullable()->default(1)->comment('替换类型 1-手动替换 2-自动替换 3-批量替换');
            $table->integer('task_id')->default(0)->comment('批量替换任务id');
            $table->string('admin_name', 50)->default('')->comment('替换人名称');
            $table->integer('admin_id')->default(0)->comment('替换人id');
            $table->integer('addtime');
            $table->integer('uptime');

            $table->index(['date', 'gameid'], 'idx_date_gameid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_pack_replace_log');
    }
};
