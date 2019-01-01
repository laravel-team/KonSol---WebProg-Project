<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultationHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultation_histories', function (Blueprint $table) {
            $table->increments('consultationHistoryID');

            $table->integer('memberID')->unsigned();
            $table->foreign('memberID')->references('memberID')->on('members')->onDelete('cascade');

            $table->integer('consultantID')->unsigned();
            $table->foreign('consultantID')->references('consultantID')->on('consultants')->onDelete('cascade');
            
            $table->date('consultationDate');
            $table->string('consultationTime');
            $table->string('categoryName');
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
        Schema::dropIfExists('consultation_histories');
    }
}
