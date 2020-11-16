<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cid')->default(0)->comment('分类ID');
            $table->string('course_name',100)->default('')->comment('课程名称');
            $table->string('course_pic',255)->default('')->comment('课程封面');
            $table->text('course_intro')->comment('课程简介');
            $table->decimal('course_price',7,2)->default(0.0)->comment('课程价格');
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
        Schema::dropIfExists('courses');
    }
}
