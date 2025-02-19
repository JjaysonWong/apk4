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
        Schema::create('apk4_admin_model', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 50)->comment('名称');
            $table->string('marks', 50)->comment('对应英文');
            $table->integer('keys')->default(0)->index('unit_id')->comment('对应id');
            $table->string('url', 300)->comment('对应url');
            $table->string('addtime', 15);
            $table->boolean('is_del')->default(false)->comment('是否删除（0否，1是）');
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
        Schema::dropIfExists('apk4_admin_model');
    }
};
