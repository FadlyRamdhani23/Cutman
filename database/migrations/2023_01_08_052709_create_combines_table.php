<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('barbers_id');
            $table->unsignedBigInteger('products_id');
            $table->unsignedBigInteger('haircuts_id');
            $table->unsignedBigInteger('booking_id');
            $table->timestamps();
        });

        Schema::table('combines', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('barbers_id')->references('id')->on('barbers');
            $table->foreign('products_id')->references('id')->on('products');
            $table->foreign('haircuts_id')->references('id')->on('haircuts');
            $table->foreign('booking_id')->references('id')->on('booking');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('combines');
    }
};
