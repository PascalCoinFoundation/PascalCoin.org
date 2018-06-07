<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_entries', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('faq_group_id')->unsigned();
            $table->string('question');
            $table->string('answer');
            $table->boolean('published');
            $table->foreign('faq_group_id')->references('id')->on('faq_groups');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faq_entries');
    }
}
