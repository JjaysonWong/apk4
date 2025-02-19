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
        Schema::create('apk4_advertpic', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('adid')->comment('广告位id');
            $table->string('describe', 100)->nullable()->comment('图片说明');
            $table->string('url', 100)->nullable();
            $table->string('img', 1000)->nullable();
            $table->boolean('status')->comment('广告状态');
            $table->text('remark')->nullable()->comment('备注');
            $table->integer('no')->comment('排序');
            $table->bigInteger('uid');
            $table->string('addtime', 50);
            $table->unsignedTinyInteger('hlight')->nullable()->comment('高亮:1-是,2-否');
            $table->unsignedInteger('gid')->nullable()->comment('游戏id');
            $table->boolean('is_del')->default(false)->comment('是否删除（0否，1是）');
            $table->boolean('type')->nullable()->default(true)->comment('1 游戏 2应用');

            $table->index(['adid', 'status', 'is_del'], 'status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_advertpic');
    }
};
