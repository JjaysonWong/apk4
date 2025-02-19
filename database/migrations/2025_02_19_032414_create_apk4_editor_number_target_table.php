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
        Schema::create('apk4_editor_number_target', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('day_task_number')->default(0)->comment('聚合页标准值');
            $table->unsignedInteger('working_day_in_month')->nullable()->default(22)->comment('一月的工作天数');
            $table->unsignedInteger('working_day_in_week')->nullable()->default(5)->comment('一周的工作天数');
            $table->float('soft_standard_value', 10, 0)->default(0)->comment('软件标准值');
            $table->float('polycat_standard_value', 10, 0)->default(0)->comment('聚合页标准值');
            $table->integer('addadmin')->default(0)->comment('添加的作者');
            $table->integer('upadmin')->default(0)->comment('修改的作者');
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
        Schema::dropIfExists('apk4_editor_number_target');
    }
};
