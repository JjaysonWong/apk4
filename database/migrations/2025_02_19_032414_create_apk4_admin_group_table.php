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
        Schema::create('apk4_admin_group', function (Blueprint $table) {
            $table->smallInteger('id', true);
            $table->string('title', 25)->index('title');
            $table->text('detail')->nullable();
            $table->boolean('status')->default(true)->comment('状态：是否启用1是，2否');
            $table->integer('addtime');
            $table->integer('uptime');
            $table->smallInteger('sort')->nullable()->default(100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_admin_group');
    }
};
