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
        Schema::create('apk4_news_content', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nid')->index('nid')->comment('新闻id');
            $table->longText('content')->comment('新闻内容');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_news_content');
    }
};
