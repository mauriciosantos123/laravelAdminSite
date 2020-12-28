<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('categoria_models')->insert([
            'categoria_id' => '1',
            'name' => 'Frio',
            'collection' => 'Masculino',
            'img_categoria' => 'https://htmlstream.com/preview/unify-v2.6.3/assets/img-temp/650x850/img3.jpg',
        ]);

        DB::table('categoria_models')->insert([
            'categoria_id' => '2',
            'name' => 'frio',
            'collection' => 'feiminino',
            'img_categoria' => 'https://htmlstream.com/preview/unify-v2.6.3/assets/img-temp/650x850/img1.jpg',
        ]);
        DB::table('categoria_models')->insert([
            'categoria_id' => '3',
            'name' => 'padaraia',
            'collection' => 'massas',
            'img_categoria' => 'x',
        ]);  //
    }

}
