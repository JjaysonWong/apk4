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
        Schema::create('apk4_advert', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('group', 100)->comment('广告分组');
            $table->boolean('adtype')->comment('广告类型');
            $table->string('codes', 50)->nullable()->comment('相关代码');
            $table->boolean('num')->comment('显示数量');
            $table->bigInteger('uid');
            $table->string('addtime', 50);
            $table->boolean('is_del')->default(false)->comment('是否删除（0否，1是）');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_advert');
    }
};
