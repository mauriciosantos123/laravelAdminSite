<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('products')->insert([
            'product_id' => '1',
            'name' => 'Blusa',
            'price' => '10$',
            'desc' => 'Blusa top para o frio',
            'img_1' => 'ainda n tem',
            'img_2' => 'ainda n tem',
            'img_3' => 'ainda n tem',
            'img_destaque' => 'ainda n tem',
            'thumbnail' => 'ainda n tem',
            'sale' => 'ainda n tem',
            'status' => 'ainda n tem',
            'categoria' => '1',
            'destaque' => '1',
            'lancamento' => '1',
        ]);

        DB::table('products')->insert([
            'product_id' => '2',
            'name' => 'Calça',
            'price' => '30$',
            'desc' => 'Calça top para o frio',
            'img_1' => 'ainda n tem',
            'img_2' => 'ainda n tem',
            'img_3' => 'ainda n tem',
            'img_destaque' => 'ainda n tem',
            'thumbnail' => 'ainda n tem',
            'sale' => 'ainda n tem',
            'status' => 'ainda n tem',
            'categoria' => '1',
            'destaque' => '1',
            'lancamento' => '1',
        ]);

        DB::table('products')->insert([
            'product_id' => '3',
            'name' => 'tenis',
            'price' => '20$',
            'desc' => 'tenis top para o frio',
            'img_1' => 'ainda n tem',
            'img_2' => 'ainda n tem',
            'img_3' => 'ainda n tem',
            'img_destaque' => 'ainda n tem',
            'thumbnail' => 'ainda n tem',
            'sale' => 'ainda n tem',
            'status' => 'ainda n tem',
            'categoria' => '1',
            'destaque' => '1',
            'lancamento' => '1',
        ]);
    }

}
