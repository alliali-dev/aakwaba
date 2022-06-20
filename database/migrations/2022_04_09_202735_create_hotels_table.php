<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('adresse')->nullable();
            $table->string('telreserve')->nullable();
            $table->string('telhotel')->nullable();
            $table->string('email')->nullable();
            $table->string('localisation')->nullable();
            $table->string('nombrechambre')->nullable();
            $table->string('typechambre')->nullable();
            $table->string('equipement')->nullable();
            $table->string('menuplat')->nullable();
            $table->timestamp('ouverture');
            $table->timestamp('fermeture')->nullable();
            $table->string('autre')->nullable();
            $table->string('commentaire')->nullable();
            $table->string('photo')->nullable();
            $table->string('photochambre')->nullable();
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
        Schema::dropIfExists('hotels');
    }
}