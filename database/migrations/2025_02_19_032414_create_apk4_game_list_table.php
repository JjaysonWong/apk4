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
        Schema::create('apk4_game_list', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->unsignedMediumInteger('gameid')->default(0)->comment('主库游戏id');
            $table->string('name', 60)->index('name')->comment('游戏名称');
            $table->string('shortname', 60)->default('')->comment('简称');
            $table->string('gamedir', 50)->default('')->comment('目录');
            $table->string('title')->default('')->comment('标题');
            $table->string('keywords', 60)->default('')->comment('关键字');
            $table->string('description', 500)->comment('描述');
            $table->integer('platid')->comment('研发商id');
            $table->integer('type')->index('type')->comment('游戏类型');
            $table->boolean('recom')->default(true)->index('recom')->comment('推荐状态');
            $table->boolean('status')->default(true)->comment('游戏状态');
            $table->string('icon')->comment('icon图片');
            $table->string('icon_nine')->nullable()->comment('logo 90*90');
            $table->string('video')->comment('视频地址');
            $table->string('video_cover', 80)->default('')->comment('视频封面');
            $table->smallInteger('video_times')->comment('视频时长:秒');
            $table->string('comment')->default('')->comment('点评');
            $table->text('introduce')->comment('游戏介绍');
            $table->integer('addtime');
            $table->integer('uptime');
            $table->integer('addadmin')->default(0)->comment('添加的作者');
            $table->integer('upadmin')->default(0)->comment('最后修改的作者');
            $table->string('tags', 500)->default('')->comment('关联标签id');
            $table->unsignedInteger('tdown')->default(0)->comment('总下载次数');
            $table->unsignedInteger('mview')->default(0)->comment('月浏览量');
            $table->unsignedInteger('mdown')->default(0)->comment('月下载数');
            $table->unsignedMediumInteger('wview')->default(0)->comment('周浏览量');
            $table->unsignedMediumInteger('wdown')->default(0)->comment('周下载数');
            $table->mediumInteger('goods')->default(1)->comment('点赞数');
            $table->boolean('classify')->default(true)->comment('分类:1-游戏,2-应用');
            $table->boolean('state')->default(true)->comment('是否下架:1-否,2-是');
            $table->mediumInteger('ydown')->default(0)->comment('昨日点击数');
            $table->boolean('game_methon')->nullable()->default(false)->comment(' 游戏模式  3网游、2单机、1 h5');
            $table->float('game_score', 10, 1)->nullable()->comment('游戏评分');
            $table->string('game_comment')->nullable()->comment('游戏评价');
            $table->float('compute_score', 10, 1)->nullable()->default(0)->comment('计算评分');
            $table->string('safetitle', 100)->nullable()->default('1,2,3')->comment('安全、人工检测、官方版');
            $table->boolean('original')->nullable()->default(true)->comment('是否原创 1是 2否');
            $table->string('cooperation_platform', 50)->nullable()->default('0')->comment('合作平台 0:没有平台 1：9game多个用,拼接');
            $table->boolean('cooperation')->nullable()->default(false)->comment('是否合作 1是 2否');
            $table->string('rank_en')->nullable()->comment('游戏排行榜英文');
            $table->string('rank_cn')->nullable()->comment('游戏排行榜中文');
            $table->boolean('rank_number')->nullable()->default(true)->comment('名次');
            $table->boolean('is_pack')->nullable()->default(false)->comment('是否打包');
            $table->tinyInteger('isshow')->default(2)->index('isshow')->comment('是否特殊 1是 2否');
            $table->boolean('is_down')->nullable()->default(false)->comment('是否下载到本地');
            $table->string('union_id', 50)->nullable()->unique('union_id')->comment('唯一字符串');
            $table->integer('common_id')->default(0)->comment('公共库id');
            $table->string('addadmin_name', 100)->nullable()->comment('添加管理员姓名');
            $table->string('upadmin_name', 100)->nullable()->comment('修改管理员姓名');
            $table->integer('is_push')->nullable()->default(0)->comment('0不是推送    大于0是推送的 草稿箱的id');
            $table->longText('introduce_log')->nullable()->comment('日志');
            $table->longText('history_introduce_log')->nullable()->comment('历史日志');
            $table->string('privacy')->comment('隐私url');
            $table->string('icp_code', 50)->comment('备案号');
            $table->string('version_name', 50)->comment('版号');
            $table->boolean('is_360')->default(false)->comment('1打勾 2不打勾 助手广告');
            $table->string('unique_id', 500)->default('')->comment('采集接口');

            $table->index(['classify', 'addadmin', 'addtime'], 'addadmincount');
            $table->index(['status', 'classify'], 'classify-status');
            $table->index(['name', 'gameid'], 'index_1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_game_list');
    }
};
