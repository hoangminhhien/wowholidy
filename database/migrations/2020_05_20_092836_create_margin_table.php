<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('margin', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_order');
            $table->text('hotel')->nullable();
            $table->text('other')->nullable();
            $table->text('countAirline')->nullable();
            $table->text('countHotel')->nullable();
            $table->text('countOther')->nullable();
            $table->text('count')->nullable();
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
        Schema::dropIfExists('margin');
    }
}
