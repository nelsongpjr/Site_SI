<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTgsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tgsis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo')->nullable();
            $table->longText('descricao');
            $table->string('autor',50);
            
            $table->integer('admin_id');
            $table->integer('imagens_id')->nullable();
            $table->integer('anexo_id')->nullable();

            $table->foreign('imagens_id')->references('id')
            ->on('imagens')
            ->onDelete('cascade');
            $table->foreign('anexo_id')->references('id')
            ->on('anexos')
            ->onDelete('cascade');
            $table->foreign('admin_id')->references('id')
            ->on('User');  
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
        Schema::dropIfExists('tgsis');
    }
}
