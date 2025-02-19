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
        Schema::create('apk4_spider_log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('task_id')->default(0)->comment('任务id');
            $table->string('spider_name', 30)->default('')->comment('蜘蛛名称');
            $table->string('ip', 30)->default('')->comment('访问ip');
            $table->string('method', 10)->default('')->comment('请求方式');
            $table->integer('status_code')->default(0)->comment('响应状态码');
            $table->dateTime('access_time')->nullable()->index('access_time')->comment('访问时间');
            $table->string('web_url', 200)->default('')->comment('访问地址');
            $table->string('user_agent', 200)->default('')->comment('访问地址');
            $table->string('nginx_time', 30)->default('0')->comment('访问时间 nginx格式');
            $table->string('http_version', 20)->default('')->comment('http 协议版本');
            $table->string('log_content', 500)->default('')->comment('日志原内容');
            $table->string('path', 30)->nullable()->default('')->comment('访问目录');
            $table->integer('gameid')->default(0)->comment('游戏id');
            $table->string('union_id', 20)->default('')->comment('唯一id');
            $table->string('url_id', 20)->default('')->comment('url 访问资源id');
            $table->integer('addtime');
            $table->integer('uptime');
            $table->string('site_title', 200)->default('')->comment('网站标题');
            $table->string('site_domain', 150)->default('')->comment('网站域名');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_spider_log');
    }
};
