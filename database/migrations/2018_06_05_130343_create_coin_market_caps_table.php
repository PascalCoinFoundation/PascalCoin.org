<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoinMarketCapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coin_market_caps', function (Blueprint $table) {
            $table->increments('id');

            // max price: 9,999.99
            $table->string('symbol');

            // max price: 9,999.99999999
            $table->decimal('price', 12, 8)->unsigned();
            // max volume 99,999,999,999.99
            $table->decimal('volume_24h', 13, 2)->unsigned();
            // max market cap 99,999,999,999.99
            $table->decimal('market_cap', 13, 2)->unsigned();

            // +- 9,999.99
            $table->decimal('percent_change_1h', 6, 2);
            $table->decimal('percent_change_24h', 6, 2);
            $table->decimal('percent_change_7d', 6, 2);

            $table->integer('rank');
            $table->integer('supply');
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
        Schema::dropIfExists('coin_market_caps');
    }
}
