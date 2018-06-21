<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presses', function (Blueprint $table) {
            $table->increments('id');
            $table->date('pub_date');
            $table->string('source_logo');
            $table->string('source_name');
            $table->text('source_link');
            $table->string('language');
            $table->string('title');
            $table->text('content');
            $table->boolean('published');
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
        Schema::dropIfExists('presses');
    }
}
