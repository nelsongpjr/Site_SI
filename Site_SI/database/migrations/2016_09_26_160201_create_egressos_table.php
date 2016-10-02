<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEgressosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egressos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',45);
            $table->text('descricao')->nullable();
            
            $table->integer('admin_id')->unsigned();
            $table->integer('imagens_id')->nullable()->unsigned();
            $table->integer('anexo_id')->nullable()->unsigned();

            $table->foreign('imagens_id')->references('id')
                                    ->on('imagens')
                                    ->onDelete('cascade');
            $table->foreign('anexo_id')->references('id')
                                    ->on('anexos')
                                    ->onDelete('cascade');
            
            $table->foreign('admin_id')->references('id')
                                    ->on('users');
            
            
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
        Schema::dropIfExists('egressos');
    }
}
