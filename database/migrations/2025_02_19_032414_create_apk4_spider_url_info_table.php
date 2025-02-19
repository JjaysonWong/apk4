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
        Schema::create('apk4_spider_url_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('web_url', 200)->default('')->comment('访问域名');
            $table->string('path', 30)->default('')->comment('目录');
            $table->string('url_id', 30)->default('')->comment('访问id');
            $table->string('site_title', 200)->default('')->comment('网站标题');
            $table->string('site_domain', 200)->default('')->comment('网站域名');
            $table->string('url_unique_id', 40)->default('')->index('idx_unique_id')->comment('唯一标识id 用于分组');
            $table->integer('addtime');
            $table->integer('uptime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_spider_url_info');
    }
};
