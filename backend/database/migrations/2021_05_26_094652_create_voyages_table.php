<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoyagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyages', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->foreignId('agence_id')->constrained();
            $table->foreignId('ville_id')->constrained();
            $table->foreignId('places_id')->constrained();
            $table->string('depart');
            $table->string('ligne_fr');
            $table->string('ligne_ar');
            $table->boolean('active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voyages');
    }
}
