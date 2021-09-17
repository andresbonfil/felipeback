<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');      //DEL PRODUCTO
            $table->string('descripcion');//DEL PRODUCTO
            $table->decimal('pu');       //PRECIO UNITARIO
            $table->decimal('pe');      //PRECIO ESPECIAL
            $table->integer('cpe');    //CANTIDAD PARA PRECIO ESPECIAL
            $table->char('disp', 1);//¿DISPONIBLE? s/n
            $table->bigInteger('idv')->unsigned();            
            $table->foreign('idv')->references('id')->on('usuarios');
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
        Schema::dropIfExists('productos');
    }
}
