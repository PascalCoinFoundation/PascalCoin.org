<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFaqSortOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('faq_groups', function (Blueprint $table) {
            $table->integer('position')->unsigned()->default(0);
        });
        Schema::table('faq_entries', function (Blueprint $table) {
            $table->integer('position')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('faq_groups', function (Blueprint $table) {
            $table->dropColumn('position');
        });
        Schema::table('faq_entries', function (Blueprint $table) {
            $table->dropColumn('position');
        });
    }
}
