<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNguyenlieuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguyenlieu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('soluong');
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
        Schema::dropIfExists('nguyenlieu');
    }
}
