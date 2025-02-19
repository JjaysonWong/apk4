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
        Schema::create('apk4_keymap', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 100)->unique('name');
            $table->integer('sort_order')->nullable()->default(0)->comment('优先级 越大的越优先');
            $table->boolean('status')->default(true)->comment('状态:1-正常 2-删除');
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
        Schema::dropIfExists('apk4_keymap');
    }
};
