<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_producto', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('orden_id')->unsigned();
            $table->bigInteger('producto_id')->unsigned();
            $table->integer('cantidad');
            $table->double('total');

            $table->foreign('orden_id')->references('id')->on('ordens');
            $table->foreign('producto_id')->references('id')->on('productos');

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
        Schema::dropIfExists('orden_producto');
    }
}
