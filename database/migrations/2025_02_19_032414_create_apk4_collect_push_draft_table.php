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
        Schema::create('apk4_collect_push_draft', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedMediumInteger('gameid')->default(0)->comment('主库游戏id');
            $table->string('name', 100)->index('idx_name')->comment('游戏名称');
            $table->string('subject', 100)->default('')->comment('主词');
            $table->string('gamedir', 50)->default('')->comment('目录');
            $table->string('title')->default('')->index('idx_title')->comment('标题');
            $table->string('seo_title')->default('')->comment('seo标题');
            $table->string('keywords')->default('')->comment('关键字');
            $table->string('description', 500)->comment('描述');
            $table->integer('type')->comment('游戏类型');
            $table->boolean('status')->default(true)->comment('游戏状态');
            $table->string('icon')->comment('icon图片');
            $table->string('video')->comment('视频地址');
            $table->string('video_cover', 80)->default('')->comment('视频封面');
            $table->smallInteger('video_times')->comment('视频时长:秒');
            $table->string('comment')->default('')->comment('点评');
            $table->integer('addadmin')->default(0)->comment('添加的作者');
            $table->integer('upadmin')->default(0)->comment('最后修改的作者');
            $table->string('addadmin_name', 100)->nullable()->comment('添加管理员姓名');
            $table->string('upadmin_name', 100)->nullable()->comment('修改管理员姓名');
            $table->string('tags', 500)->default('')->comment('关联标签id');
            $table->boolean('classify')->default(true)->comment('分类:1-游戏,2-应用');
            $table->string('game_comment')->nullable()->comment('游戏评价');
            $table->boolean('original')->nullable()->default(true)->comment('是否原创 1是 2采集 3人工');
            $table->string('union_id', 200)->nullable()->comment('唯一字符串');
            $table->integer('common_id')->nullable();
            $table->integer('web_id')->default(0)->comment('网站id ');
            $table->integer('master_id')->default(0)->comment('主采集内容id');
            $table->string('and_ver', 30)->default('')->comment('安卓版本号');
            $table->decimal('and_size', 10)->nullable()->comment('安卓包大小');
            $table->string('and_url', 500)->default('')->comment('安卓下载地址');
            $table->boolean('and_unit')->default(true)->comment('安卓下载包单位');
            $table->integer('addtime');
            $table->integer('uptime');
            $table->integer('deltime')->default(0)->comment('删除时间');
            $table->integer('subject_id')->default(0)->index('idx_subject')->comment('主词id');
            $table->string('and_pkgname', 100)->default('')->comment('包名');
            $table->string('and_md5', 100)->default('')->comment('包md5');
            $table->integer('pkg_id')->default(0)->comment('包resource_id');
            $table->string('screen_shot_imgs', 1000)->default('')->comment('截图列表');
            $table->boolean('push_status')->default(false)->comment('0-未发布 1-已发布 2-发布失败');
            $table->integer('push_time')->nullable()->index('idx_push_time')->comment('发布时间');
            $table->string('shortname', 50)->default('')->comment('游戏简称');
            $table->tinyInteger('push_type')->default(1)->comment('推送类型 1-手动 2-自动');
            $table->string('error_json', 1000)->comment('错误信息json');
            $table->tinyInteger('check_status')->default(1)->comment('内容检查状态 1-正常  2-异常');
            $table->string('error_hint', 100)->default('')->comment('错误提示');
            $table->dateTime('auto_push_time')->nullable()->comment('自动发布时间');
            $table->string('push_error_msg')->nullable()->comment('推送失败 错误提示');
            $table->tinyInteger('generate_rule_type')->default(1)->comment('生成规则类型 1- 固定模式 2-模板规则');
            $table->integer('template_id')->default(0)->comment('模板id');
            $table->integer('template_version')->default(0)->comment('模板版本');
            $table->integer('fix_subject_id')->default(0)->comment('指定词记录id');
            $table->float('max_similarity', 10, 0)->default(0)->comment('最大句子相似度');
            $table->float('spend_time', 10, 0)->default(0)->comment('生成消耗时间');
            $table->float('quality_score', 10, 0)->default(0)->index('idx_quality_score')->comment('质量分数');

            $table->index(['web_id', 'push_type', 'push_status'], 'idx_web_push_type_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_collect_push_draft');
    }
};
