<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',50);
            $table->longText('descricao')->nullable();
            $table->integer('admin_id');
            $table->integer('imagens_id')->nullable();
            
            $table->foreign('imagens_id')->references('id')->on('imagens')->onDelete('cascade');
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
        Schema::dropIfExists('docentes');
    }
}
