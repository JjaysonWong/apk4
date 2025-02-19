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
        Schema::create('apk4_admin', function (Blueprint $table) {
            $table->smallInteger('uid', true);
            $table->string('username', 16)->default('');
            $table->char('password', 32)->default('');
            $table->text('tjdm')->comment('统计代码');
            $table->string('lastip', 15)->nullable()->comment('上次登录ip');
            $table->string('nowip', 15)->nullable()->comment('本次ip');
            $table->integer('lasttime')->comment('上次登录时间');
            $table->integer('nowtime')->comment('本次登录时间');
            $table->boolean('status')->default(true)->index('status')->comment('状态1正常');
            $table->integer('logincount')->comment('登录次数');
            $table->smallInteger('group_id')->comment('管理员组id');
            $table->tinyInteger('category')->nullable()->comment('1admin 2编辑 3 特殊');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_admin');
    }
};
