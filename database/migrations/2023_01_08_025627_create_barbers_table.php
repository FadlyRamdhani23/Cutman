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
        Schema::create('barbers', function (Blueprint $table) {
            $table->id();
            $table->string('namaBarber');
            $table->string('fotoBarber');
            $table->string('descBarber');
            $table->string('twitterBarber')->nullable();
            $table->string('facebookBarber')->nullable();
            $table->string('instagramBarber')->nullable();
            $table->string('linkedinBarber')->nullable();
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
        Schema::dropIfExists('barbers');
    }
};
