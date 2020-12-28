<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\ProductsModel;
use \App\Models\CategoriaModel;

class ProductsController extends Controller {

    private function process_form(Request $request) {
        $data['destaque'] = 0;
        $data['lancamento'] = 0;

        if ($request->destaque == "on") {
            $data['destaque'] = 1;
        }

        if ($request->lancamento == "on") {
            $data['lancamento'] = 1;
        }
        $data['name'] = $request->name;
        $data['price'] = $request->price;
        $data['desc'] = $request->desc;
        $data['img_1'] = $request->img_1;
        $data['img_2'] = $request->img_2;
        $data['img_3'] = $request->img_3;
        $data['img_destaque'] = $request->img_destaque;
        $data['thumbnail'] = $request->thumbnail;
        $data['sale'] = $request->sale;
        $data['status'] = $request->status;
        $data['categoria'] = $request->categoria;

        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $listproduct = ProductsModel::get();
        $data['listproduct'] = $listproduct;


        $data['list'] = array();

        return view('products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $data = array();

        //parte da categoria

        $catglist = CategoriaModel::get();

        $data['catglist'] = $catglist;

        //fim da categoria


        return view('products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        ProductsModel::create($this->process_form($request));
        $request->session()->flash('message', ' cadatrado com sucesso');
        return redirect()->to('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $reg = ProductsModel::findOrFail($id);
        $data['reg'] = $reg;
        return view('products.edit', $data);
    }

    /*     * 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id) {


        $data = array();
        $data['product_id'] = $id;

        //parte da categoria
        $catglist = CategoriaModel::get();
        $data['catglist'] = $catglist;
        //fim da categoria


        $reg = ProductsModel::findOrFail($id);
        $data ["registro"] = $reg;

        return view('products.edit', $data);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //


        $reg = CategoriaModel::findOrFail($id);
        // dd($request->all());
        $reg->update($this->process_form($request));

        $request->session()->flash('message', ' Editado com sucesso');
        return redirect()->to('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req, $id) {


        ProductsModel::where("product_id", $id)->delete();
        $req->session()->flash('message', ' apagado com sucesso');
        return redirect()->to('product');
    }

}
