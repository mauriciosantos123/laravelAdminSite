<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 100);
                $table->string('email', 100);
                $table->string('gender', 100);
                $table->date('birthdate');
                $table->string('password', 20);
                $table->string('phone',20);

                $table->timestamp('date_created', 0)->nullable();
                $table->timestamp('date_modified', 0)->nullable();
                
                $table->index(['name','email','gender','phone']);
            });
        
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
