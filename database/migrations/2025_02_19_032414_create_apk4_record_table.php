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
        Schema::create('apk4_record', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('id');
            $table->integer('project_id')->default(0)->comment('应用id');
            $table->string('project_name', 64)->default('')->comment('应用名称');
            $table->string('project_type', 10)->nullable()->index('idx_type')->comment('资源类型');
            $table->string('project_cate', 20)->default('')->index('idx_cate')->comment('资源分类:app,game');
            $table->integer('project_category')->default(0)->comment('广告分类');
            $table->string('link_type', 20)->default('')->comment('返回链接的类型 nofound/android_offical/android_ad/ios_offical/ios_ad');
            $table->string('link_url')->default('')->comment('访问链接的url');
            $table->integer('material_id')->default(0)->comment('下载链id');
            $table->integer('publisher_id')->default(0)->comment('合作方id');
            $table->string('user_client', 20)->default('')->comment('用户客户端类型 windows/ios/android');
            $table->string('user_agent')->default('')->comment('用户ua');
            $table->unsignedInteger('ip_int')->default(0)->index('idx_ip');
            $table->string('ip', 20)->default('');
            $table->timestamp('time')->useCurrent()->index('time');
            $table->string('platform_chars', 64)->default('')->comment('平台字符串');
            $table->string('editor', 20)->default('')->comment('编辑名字');
            $table->string('site', 20)->default('')->index('site')->comment('网站域名');
            $table->unsignedTinyInteger('behavior')->default(1)->index('idx_behavior')->comment('行为:1-下载,2-浏览');
            $table->string('country', 20)->default('');
            $table->string('province', 20)->default('');
            $table->string('city', 20)->default('');
            $table->string('country_id', 20)->default('');
            $table->unsignedInteger('province_id')->default(0);
            $table->unsignedInteger('city_id')->default(0);
            $table->tinyInteger('down_type')->default(0)->comment('1-4，1:and 2:ios 3:pc 4:360');
            $table->integer('batch_id')->nullable()->default(0)->index('batch_id')->comment('批次id');
            $table->boolean('is_push')->nullable()->default(false)->index('is_push')->comment('是否推送 0没有  1已推送');

            $table->index(['site', 'behavior', 'time'], 'idx_union');
            $table->index(['material_id', 'behavior', 'time'], 'material_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_record');
    }
};
