<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 50);
            $table->string('Stazione_di_partenza', 50);
            $table->string('Stazione_di_arrivo', 50);
            $table->date('Data_di_partenza');
            $table->time('Orario_di_partenza');
            $table->time('Orario_di_arrivo');
            $table->mediumInteger('Codice_Treno');
            $table->tinyInteger('Numero_Carrozze');
            $table->time('In_orario');
            $table->boolean('Cancellato')->deafult(0);
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
        Schema::dropIfExists('trains');
    }
}
