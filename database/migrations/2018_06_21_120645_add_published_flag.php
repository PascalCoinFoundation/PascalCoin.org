<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPublishedFlag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('white_paper_contents', function (Blueprint $table) {
            $table->boolean('published')->default(false);
        });
        Schema::table('home_boxes', function (Blueprint $table) {
            $table->boolean('published')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('white_paper_contents', function (Blueprint $table) {
            $table->dropColumn('published');
        });

        Schema::table('home_boxes', function (Blueprint $table) {
            $table->dropColumn('published');
        });
    }
}
