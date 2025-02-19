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
        Schema::create('apk4_news', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('gameid')->default(0)->comment('游戏id');
            $table->string('title', 100)->comment('标题');
            $table->string('tags', 500)->default('')->comment('标签');
            $table->boolean('type')->default(true)->comment('新闻类型');
            $table->boolean('status')->default(true)->index('status')->comment('状态:1-显示');
            $table->boolean('recom')->comment('推荐');
            $table->string('keyword', 100)->comment('关键字');
            $table->string('list_img')->default('')->comment('列表图');
            $table->string('big_img')->default('')->comment('大图');
            $table->string('describe', 500)->comment('描述');
            $table->string('source', 150)->default('')->comment('来源');
            $table->string('abstract')->default('')->comment('摘要');
            $table->integer('addtime')->index('addtime');
            $table->integer('uptime');
            $table->integer('addadmin');
            $table->integer('upadmin');
            $table->unsignedInteger('tview')->default(0)->comment('总浏览次数');
            $table->unsignedInteger('mview')->default(0)->comment('月浏览量');
            $table->unsignedMediumInteger('wview')->default(0)->index('wview')->comment('周浏览量');
            $table->mediumInteger('goods')->default(1)->comment('点赞数');
            $table->mediumInteger('bads')->default(0)->comment('反对数');
            $table->string('author', 15)->default('')->comment('作者');
            $table->boolean('original')->default(true)->comment('是否原创:1-是,2否');
            $table->unsignedInteger('release_time')->default(0)->comment('定时发布时间');
            $table->boolean('cooperation')->nullable()->default(false)->comment('是否合作 1是 2否');
            $table->string('seo_title', 100)->nullable()->comment('seo标题');
            $table->char('rand_key', 10)->nullable()->comment('随机字符串');
            $table->integer('is_push')->nullable()->default(0)->comment('0不是推送    大于0是推送的 草稿箱的id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_news');
    }
};
