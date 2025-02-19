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
        Schema::create('apk4_keydeny', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name')->unique('name');
            $table->unsignedTinyInteger('site')->default(1)->comment('屏蔽站点 1 m 、2 pc');
            $table->string('key_word_id', 500)->default('')->comment('屏蔽词id 多个用,');
            $table->boolean('status')->default(true)->comment('状态:1-开启 2-关闭');
            $table->string('area', 100)->default('')->comment('屏蔽地区');
            $table->string('url')->default('')->comment('屏蔽url');
            $table->string('time_solt')->default('')->comment('屏蔽时间段');
            $table->integer('addtime')->nullable();
            $table->integer('uptime')->nullable();
            $table->integer('addadmin')->default(0)->comment('添加的作者id');
            $table->string('addadmin_name', 100)->nullable()->comment('添加的作者');
            $table->integer('upadmin')->default(0)->comment('最后修改的作者');
            $table->string('upadmin_name', 100)->nullable()->comment('修改的作者');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_keydeny');
    }
};
