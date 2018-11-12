<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditIconTextOnHowToMine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('how_to_mine_contents', function (Blueprint $table) {
            $table->dropColumn('icon');
        });
        Schema::table('how_to_mine_contents', function (Blueprint $table) {
            $table->text('icon');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('how_to_mine_contents', function (Blueprint $table) {
            $table->dropColumn('icon');
        });
        Schema::table('how_to_mine_contents', function (Blueprint $table) {
            $table->string('icon');
        });
    }
}
