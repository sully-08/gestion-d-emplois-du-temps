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
        /* Schema::create('seances', function (Blueprint $table) {
            $table->increments('id_seance');
            $table->string('jour');
            $table->string('hdebut');
            $table->string('hfin');
            $table->string('type');

           $table->timestamps();
        });
       */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seances');
    }
};
