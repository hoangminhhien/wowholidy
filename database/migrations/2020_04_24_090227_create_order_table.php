<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nameSaler')->nullable();
            $table->string('teamSaler')->nullable();
            $table->string('typeCustomer')->nullable();
            $table->string('typeCombo')->nullable();
            $table->string('contactCode')->nullable();
            $table->string('nameCustomer')->nullable();
            $table->string('phoneCustomer')->nullable();
            $table->string('mailCustomer')->nullable();
            $table->string('country')->nullable();
            $table->text('airLine')->nullable();
            $table->text('hotel')->nullable();
            $table->text('other')->nullable();
            $table->text('payment')->nullable();
            $table->string('countValue')->nullable();
            $table->unsignedTinyInteger('airlineStatus')->default(0);
            $table->unsignedTinyInteger('hotelStatus')->default(0);
            $table->unsignedTinyInteger('otherStatus')->default(0);
            $table->unsignedTinyInteger('status')->default(0);
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
        Schema::dropIfExists('order');
    }
}
