<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcontsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proconts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cid')->default(0)->comment('分类ID');
            $table->string('pro_name',100)->default('')->comment('案例名称');
            $table->string('pro_pic',255)->default('')->comment('案例图片');
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
        Schema::dropIfExists('proconts');
    }
}
