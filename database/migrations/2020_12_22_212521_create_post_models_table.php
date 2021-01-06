<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('blog_id');
            $table->string('titulo', 100);
            $table->string('autor', 100);
            $table->string('desc', 255);
              $table->string('categoria', 255);
                $table->string('img_blog');
            $table->date('dateblog');
            $table->timestamps();
            $table->index(['titulo','autor','desc','dateblog']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog');
    }
}
