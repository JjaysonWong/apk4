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
        Schema::create('apk4_new_collection', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30)->default('')->index('idx_name')->comment('名称');
            $table->string('title')->default('')->comment('标题');
            $table->string('keywords', 100)->default('')->comment('关键词');
            $table->string('description', 400)->default('')->comment('描述');
            $table->string('icon', 1000)->default('')->comment('icon地址');
            $table->string('type', 5)->default('')->comment('类型');
            $table->string('tag', 100)->default('')->comment('标签');
            $table->string('img', 500)->default('')->comment('截图');
            $table->text('content')->nullable()->comment('简介');
            $table->text('update_content')->nullable()->comment('更新内容');
            $table->string('and_size', 10)->default('')->comment('安卓大小');
            $table->string('and_ver', 20)->default('')->comment('安卓版本');
            $table->string('ios_size', 10)->default('')->comment('ios大小');
            $table->string('ios_ver', 20)->default('')->comment('ios版本');
            $table->string('firm', 30)->default('')->comment('厂商');
            $table->unsignedInteger('addtime')->default(0)->index('idx_addtime')->comment('采集时间');
            $table->unsignedInteger('update_time')->default(0)->index('idx_uptime')->comment('对方更新时间');
            $table->tinyInteger('classify')->default(1)->index('idx_classify')->comment('分类:1-游戏 2-应用');
            $table->string('source', 10)->default('')->comment('来源');
            $table->string('url')->default('')->comment('来源url');
            $table->tinyInteger('is_storage')->default(2)->index('idx_storage')->comment('是否入库:1-是 2-否');
            $table->unsignedInteger('storage_time')->default(0)->comment('入库时间');
            $table->string('and_url', 1000)->nullable()->comment('安卓下载地址');
            $table->string('update_content_title')->nullable()->comment('更新标题');
            $table->boolean('update_status')->nullable()->default(false)->comment('默认0  待更新1 已更新2');
            $table->string('master_ids')->nullable()->comment('绑定的多个主库id 多个用,拼接');
            $table->integer('update_at')->nullable()->comment('操作更新时间');
            $table->boolean('is_pull')->nullable()->default(true)->comment('是否拉取 1没拉取  2拉取');
            $table->string('privacy_policy', 200)->nullable()->comment('隐私政策');
            $table->string('plat_name', 100)->nullable()->comment('厂商');
            $table->string('record_number', 100)->nullable()->comment('备案号');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_new_collection');
    }
};
