<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('booking_no');
            $table->string('telp');
            $table->string('address');
            $table->date('departure');
            $table->integer('id_detpax')->unsigned();
            $table->foreign('id_detpax')->references('id')->on('detpax');
            $table->integer('amount');
            $table->text('message')->nullable();
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
        Schema::dropIfExists('booking');
    }
}