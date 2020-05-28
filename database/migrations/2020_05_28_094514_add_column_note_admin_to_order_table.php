<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnNoteAdminToOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order', function (Blueprint $table) {
            $table->text('service')->nullable();
            $table->string('noteAdminAir')->nullable();
            $table->string('codeHotel')->nullable();
            $table->string('noteHotelSale')->nullable();
            $table->string('noteAdminHotel')->nullable();
            $table->string('noteOtherSale')->nullable();
            $table->string('noteAdminOther')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order', function (Blueprint $table) {
            $table->dropColumn('service');
            $table->dropColumn('noteAdminAir');
            $table->dropColumn('codeHotel');
            $table->dropColumn('noteHotelSale');
            $table->dropColumn('noteAdminHotel');
            $table->dropColumn('noteOtherSale');
            $table->dropColumn('noteAdminOther');
        });
    }
}
