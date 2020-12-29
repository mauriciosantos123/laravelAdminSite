<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsModelsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('name', 100);
            $table->string('price', 100);
            $table->string('desc', 255);
            $table->text('img_1')->nullable();
            $table->text('img_2')->nullable();
            $table->text('img_3')->nullable();
            $table->text('img_destaque')->nullable();
            $table->text('thumbnail')->nullable();
            $table->text('sale');
            $table->string('status', 100);
            $table->string('categoria', 100);
            $table->integer('destaque');
            $table->integer('lancamento');
            $table->timestamp('date_created', 0)->nullable();
            $table->timestamp('date_modified', 0)->nullable();


            $table->index(['name', 'price', 'desc', 'status', 'categoria', 'destaque']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('products');
    }

}
