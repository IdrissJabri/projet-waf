<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->boolean('p1');
            $table->boolean('p2');
            $table->boolean('p3');
            $table->boolean('p4');
            $table->boolean('p5');
            $table->boolean('p6');
            $table->boolean('p7');
            $table->boolean('p8');
            $table->boolean('p9');
            $table->boolean('p10');
            $table->boolean('p11');
            $table->boolean('p12');
            $table->boolean('p13');
            $table->boolean('p14');
            $table->boolean('p15');
            $table->boolean('p16');
            $table->boolean('p17');
            $table->boolean('p18');
            $table->boolean('p19');
            $table->boolean('p20');
            $table->boolean('p21');
            $table->boolean('p22');
            $table->boolean('p23');
            $table->boolean('p24');
            $table->boolean('p25');
            $table->boolean('p26');
            $table->boolean('p27');
            $table->boolean('p28');
            $table->boolean('p29');
            $table->boolean('p30');
            $table->boolean('p31');
            $table->boolean('p32');
            $table->boolean('p33');
            $table->boolean('p34');
            $table->boolean('p35');
            $table->boolean('p36');
            $table->boolean('p37');
            $table->boolean('p38');
            $table->boolean('p39');
            $table->boolean('p40');
            $table->boolean('p41');
            $table->boolean('p42');
            $table->boolean('p43');
            $table->boolean('p44');
            $table->boolean('p45');
            $table->boolean('p46');
            $table->boolean('p47');
            $table->boolean('p48');
            $table->boolean('p49');
            $table->boolean('p50');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places');
    }
}
