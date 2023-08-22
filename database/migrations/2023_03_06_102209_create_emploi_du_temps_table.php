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
        Schema::create('emploi_du_temps', function (Blueprint $table) {
            $table->increments('id_emploi');
            $table->string('jour');
            $table->string('hdebut');
            $table->string('hfin');
            $table->string('type');
            $table->string('module');
            $table->string('salle');
            $table->string('enseignant');
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
        Schema::dropIfExists('emploi_du_temps');
    }
};
