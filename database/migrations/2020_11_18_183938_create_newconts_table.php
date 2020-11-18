<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewcontsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newconts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cid')->default(0)->comment('分类ID');
            $table->string('new_name',100)->default('')->comment('新闻标题');
            $table->string('new_pic',255)->default('')->comment('新闻封面');
            $table->text('new_cont')->comment('新闻内容');
            $table->integer('view_count')->default(99)->comment('浏览量');
            $table->string('is_hot',8)->default('F')->comment('热门');
            $table->string('is_recommend',8)->default('F')->comment('推荐');
            $table->string('author',32)->default('')->comment('作者');
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
        Schema::dropIfExists('newconts');
    }
}
