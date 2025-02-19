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
        Schema::create('apk4_similar_game', function (Blueprint $table) {
            $table->mediumInteger('fid')->default(0)->comment('父id');
            $table->boolean('classify')->default(true)->comment('分类:1-游戏,2-应用');
            $table->mediumInteger('sid')->default(0)->comment('子id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_similar_game');
    }
};
