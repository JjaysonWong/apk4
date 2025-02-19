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
        Schema::create('apk4_admin_auth', function (Blueprint $table) {
            $table->smallInteger('uid')->primary();
            $table->text('detail')->comment('权限详情');
            $table->integer('addtime');
            $table->integer('uptime');
            $table->smallInteger('adduid');
            $table->smallInteger('upuid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apk4_admin_auth');
    }
};
