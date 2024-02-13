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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table -> string('azienda', 60);
            $table -> string('stazione_di_partenza');
            $table -> string('stazione_di_arrivo');
            // $table -> dateTime('orario di partenza', 6);
            // $table -> dateTime('orario di arrivo', 6);
            $table -> decimal('codice_treno', 5, 0);
            $table -> decimal('numero_di_carrozze', 2, 0);
            $table -> boolean('in_orario') -> default(true);
            $table -> boolean('cancellato') -> default(false);

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
};
