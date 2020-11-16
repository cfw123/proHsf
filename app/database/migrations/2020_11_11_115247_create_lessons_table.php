<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cate_id')->default(0)->comment('分类ID');
            $table->unsignedInteger('course_id')->default(0)->comment('课程ID');
            $table->string('lname',100)->default('')->comment('课时名称');
            $table->unsignedInteger('duration')->default(0)->comment('时长 秒');
            $table->string('url',255)->default('')->comment('播放地址');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
