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
        Schema::create('apk4_spider_task', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number')->default(0)->comment('日志行数');
            $table->string('filename', 100)->default('')->comment('文件名称');
            $table->bigInteger('filesize')->default(0)->comment('文件大小');
            $table->string('web_url', 100)->default('1')->comment('网站url');
            $table->boolean('status')->default(false)->comment('任务状态 0-未完成  1-已完成');
            $table->date('log_date')->nullable()->comment('日志日期');
            $table->integer('log_hour_start')->default(0)->comment('日志开始小时');
            $table->integer('log_hour_end')->default(0)->comment('日志结束小时');
            $table->dateTime('start_time')->nullable()->comment('开始时间');
            $table->dateTime('end_time')->nullable()->comment('结束时间');
            $table->float('spend_time', 10, 0)->default(0)->comment('消耗时间');
            $table->integer('uptime');
            $table->integer('addtime');
            $table->integer('success_number')->default(0)->comment('成功数量');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_spider_task');
    }
};
