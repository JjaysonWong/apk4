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
        Schema::create('apk4_sync_link_task', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('date', 20)->default('')->comment('日期');
            $table->unsignedInteger('status')->default(0)->comment('完成 0 - 未完成  1- 完成');
            $table->integer('task_batch')->default(0)->comment('任务批次');
            $table->unsignedInteger('start_project_id')->default(0)->comment('起始id');
            $table->integer('end_project_id')->default(0)->comment('结束id');
            $table->unsignedInteger('number')->default(0)->comment('任务数量');
            $table->string('request_url', 200)->default('')->comment('请求url');
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
        Schema::dropIfExists('apk4_sync_link_task');
    }
};
