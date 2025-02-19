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
        Schema::create('apk4_synonym', function (Blueprint $table) {
            $table->smallInteger('id', true);
            $table->string('match_word', 20)->default('')->unique('uq_match_word')->comment('匹配词');
            $table->string('synonym', 20)->default('')->comment('同义词');
            $table->integer('priority')->default(0)->comment('优先级');
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
        Schema::dropIfExists('apk4_synonym');
    }
};
