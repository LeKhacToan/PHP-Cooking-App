<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuocthuchienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buocthuchien', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('describe');
            $table->string('link_image')->nullable();
            $table->unsignedInteger('baiviet_id');
            $table->foreign('baiviet_id')->references('id')->on('baiviet');
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
        Schema::dropIfExists('buocthuchien');
    }
}
