<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_boxes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('icon');
            $table->text('content');
            $table->integer('position');
            $table->integer('white_paper_content_id')->unsigned();
            $table->timestamps();

            $table->foreign('white_paper_content_id')->references('id')->on('white_paper_contents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_boxes');
    }
}
