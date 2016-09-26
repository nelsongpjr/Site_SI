<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->text('noticia')->nullable();
            $table->integer('img_id')->nullable();
            $table->integer('anexo_id')->nullable();
            $table->foreing('img_id')->references('id')
                                    ->on('imagens')
                                    ->onDelete('cascade');
            $table->foreing('anexo_id')->references('id')
                                    ->on('anexos')
                                    ->onDelete('cascade');
                                    
            $table->timestamps();//TAMBÉM VAI SER USADA PARA REGISTRO
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias');
    }
}
