<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDbIndexes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dynamic_texts', function(Blueprint $table) {
            $table->index(['group']);
        });
        Schema::table('home_boxes', function(Blueprint $table) {
            $table->index(['published']);
        });
        Schema::table('faq_groups', function(Blueprint $table) {
            $table->index(['published']);
        });
        Schema::table('faq_entries', function(Blueprint $table) {
            $table->index(['published', 'faq_group_id']);
        });
        Schema::table('news', function(Blueprint $table) {
            $table->index(['published']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
