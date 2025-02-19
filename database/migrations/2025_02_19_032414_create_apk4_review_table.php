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
        Schema::create('apk4_review', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('sid')->comment('资源id');
            $table->tinyInteger('type')->comment('资源类型:1-游戏,2-应用,3-攻略,4-新闻');
            $table->string('remark')->default('')->comment('审核备注');
            $table->tinyInteger('status')->comment('状态:1-通过,4-驳回');
            $table->unsignedInteger('addtime');
            $table->unsignedInteger('uptime');
            $table->integer('addadmin')->default(0)->comment('添加的作者');
            $table->integer('upadmin')->default(0)->comment('最后修改的作者');

            $table->index(['sid', 'type'], 'idx_sid_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_review');
    }
};
