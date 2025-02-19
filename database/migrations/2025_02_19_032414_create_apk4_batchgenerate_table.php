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
        Schema::create('apk4_batchgenerate', function (Blueprint $table) {
            $table->increments('id')->comment('id自增');
            $table->string('name', 100)->unique('name')->comment('名称');
            $table->string('subject', 100)->nullable()->comment('提炼主词');
            $table->string('category', 20)->nullable()->comment('原始分类');
            $table->string('tags', 200)->nullable()->comment('原始标签');
            $table->tinyInteger('status')->default(0)->comment('0初始 1生成 2失败');
            $table->integer('addtime')->nullable()->default(1691392075);
            $table->integer('uptime')->nullable()->default(1691392075);
            $table->integer('web_id')->default(7)->index('web_id')->comment('网站id');
            $table->tinyInteger('classify')->default(1)->comment('1游戏 2应用');
            $table->tinyInteger('is_subject')->default(0)->comment('是否匹配主词');
            $table->string('fail_info', 150)->default('')->comment('失败原因');
            $table->integer('subject_id')->default(0)->comment('主词id');
            $table->integer('deltime')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_batchgenerate');
    }
};
