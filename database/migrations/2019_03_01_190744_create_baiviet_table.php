<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaivietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baiviet', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('link_image');
            $table->longText('describe');
            $table->integer('time');
            $table->integer('serving');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedInteger('thucdon_id');
            $table->foreign('thucdon_id')->references('id')->on('thucdon');

            $table->unsignedInteger('loaimon_id');
            $table->foreign('loaimon_id')->references('id')->on('loaimon');

            $table->unsignedInteger('nguyenlieuchinh_id');
            $table->foreign('nguyenlieuchinh_id')->references('id')->on('nguyenlieuchinh');

            $table->unsignedInteger('dokho_id');
            $table->foreign('dokho_id')->references('id')->on('dokho');

            $table->unsignedInteger('amthuc_id');
            $table->foreign('amthuc_id')->references('id')->on('amthuc');

            $table->unsignedInteger('phuongphap_id');
            $table->foreign('phuongphap_id')->references('id')->on('phuongphap');

            $table->boolean('top_day')->default(false);
            $table->boolean('top_week')->default(false);
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
        Schema::dropIfExists('baiviet');
    }
}
