<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenHasPlatilloPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('orden_has_platillo', function (Blueprint $table) {
             $table->foreignId('orden_id')->references('id')->on('ordens');
             $table->foreignId('idPlatillo')->references('id')->on('platillos');
             $table->integer('cantidad');
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
        Schema::dropIfExists('orden_has_platillo');
    }
}
