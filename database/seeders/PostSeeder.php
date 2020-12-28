<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
            'blog_id' => '1',
            'titulo' => 'Alvorecer Dourado',
            'autor' => 'Black Clover',
            'desc'=>'Espada grande',
            'dateblog'=>'2019-12-15',


        ]);

        DB::table('blog')->insert([
            'blog_id' => '2',
            'titulo' => 'Alvorecer Prateado',
            'autor' => 'Black Clover',
            'desc'=>'Espada',
            'dateblog'=>'2019-12-15',


        ]);

        DB::table('blog')->insert([
            'blog_id' => '3',
            'titulo' => 'Dourado',
            'autor' => 'Black',
            'desc'=>' grande',
            'dateblog'=>'2019-12-15',


        ]);

        //
    }
}
