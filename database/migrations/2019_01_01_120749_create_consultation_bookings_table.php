<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultationBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultation_bookings', function (Blueprint $table) {
            $table->increments('consultationBookingID');
            
            $table->integer('memberID')->unsigned();
            $table->foreign('memberID')->references('memberID')->on('members')->onDelete('cascade');

            $table->integer('consultantID')->unsigned();
            $table->foreign('consultantID')->references('consultantID')->on('consultants')->onDelete('cascade');

            $table->integer('categoryID')->unsigned();
            $table->foreign('categoryID')->references('categoryID')->on('categories')->onDelete('cascade');

            $table->integer('consultationMethodID')->unsigned();
            $table->foreign('consultationMethodID')->references('consultationMethodID')->on('consultation_methods')->onDelete('cascade');

            $table->date('consultationDate');
            $table->string('consultationTime');
            $table->integer('duration');
            $table->integer('price');
            $table->string('topic');
            $table->string('location');
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
        Schema::dropIfExists('consultation_bookings');
    }
}
