<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cotizacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizacion', function (Blueprint $table) {
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('pdf_id');
            $table->integer('cantidad');
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('pdf_id')->references('id')->on('pdf');
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
        Schema::dropIfExists('cotizacion');
    }
}
