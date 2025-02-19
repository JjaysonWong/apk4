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
        Schema::create('apk4_sync_link_log', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('task_id')->default(0)->comment('任务id');
            $table->string('date', 20)->default('')->index('idx_date')->comment('日期');
            $table->unsignedInteger('project_id')->default(0)->comment('应用 id');
            $table->string('project_name', 64)->default('')->comment('应用 名称');
            $table->string('project_cate', 20)->default('')->comment('应用 类型');
            $table->unsignedInteger('pv')->default(0)->comment('pv 对应 view_click');
            $table->unsignedInteger('uv')->default(0)->comment('uv 对应 view_ip');
            $table->unsignedInteger('download')->default(0)->comment('download 对应click');
            $table->integer('addtime');
            $table->integer('uptime');
            $table->boolean('is_sync_spider_log')->default(false)->comment('是否同步蜘蛛访问日志表状态  0-否 1-是  2-未匹配到数据');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_sync_link_log');
    }
};
