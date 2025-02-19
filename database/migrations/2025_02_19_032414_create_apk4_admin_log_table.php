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
        Schema::create('apk4_admin_log', function (Blueprint $table) {
            $table->increments('logid')->comment('id自增');
            $table->smallInteger('type')->comment('日志类别');
            $table->string('dotype', 10)->comment('操作类型');
            $table->integer('addtime')->comment('时间');
            $table->string('username', 16)->comment('用户名');
            $table->smallInteger('uid')->index('uid')->comment('用户id');
            $table->text('logtext')->comment('日志内容');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_admin_log');
    }
};
