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
        Schema::create('apk4_category', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 63)->default('')->comment('类目名称 唯一');
            $table->string('catalog', 30)->comment('关键词');
            $table->string('seo_title')->default('')->comment('seo标题');
            $table->string('seo_keywords')->default('')->comment('seo关键词');
            $table->string('seo_description', 500)->nullable()->default('')->comment('seo描述');
            $table->integer('pid')->default(0)->index('parent_id')->comment('父类目id');
            $table->integer('sort_order')->nullable()->default(2)->comment('排序 越大的越在上面');
            $table->integer('addtime');
            $table->integer('uptime');
            $table->boolean('status')->default(true)->comment('状态:1-正常 2-关闭');
            $table->integer('addadmin');
            $table->integer('upadmin');
            $table->boolean('classify')->nullable()->comment('1游戏 2应用');
            $table->tinyInteger('is404')->default(2)->index('is404')->comment('是否需要404');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_category');
    }
};
