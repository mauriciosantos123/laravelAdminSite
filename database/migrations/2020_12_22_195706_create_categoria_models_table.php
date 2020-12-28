<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_models', function (Blueprint $table) {
            $table->increments('categoria_id');
            $table->string('name', 100);
            $table->string('collection', 100);
            $table->text('img_categoria');
            $table->timestamps();
            $table->index(['name','collection']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_models');
    }
}
