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
        Schema::create('apk4_relevant', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->unsignedMediumInteger('gameid')->default(0)->comment('主库游戏id');
            $table->integer('addtime');
            $table->integer('uptime');
            $table->smallInteger('addadmin')->comment('首次添加的管理员id');
            $table->smallInteger('upadmin')->comment('最后修改的管理员id');
            $table->boolean('similar_type')->nullable()->default(true)->comment('关联属性');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_relevant');
    }
};
