<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\ProductsModel;
use \App\Models\CategoriaModel;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listproduct = ProductsModel::get();
        $data['listproduct']= $listproduct;

   
        $data['list'] = array();
      
        return view('products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data= array();

        //parte da categoria
 
        $catglist = CategoriaModel::get();
 
        $data['catglist']= $catglist;

        //fim da categoria

        
        return view('products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
                
        ProductsModel::create([
           
 //<!-- 'name','price',desc', 'img_1','img_2','img_3','img_destaque','','sale', 'status','categoria', 'destaque'-->
    
            
            'name' => $request->name,
            'price' => $request->price,
            'desc' => $request->desc,
            'img_1' => $request->img_1,
            'img_2' => $request->img_2,
            'img_3' => $request->img_destaque,
            'thumbnail' => $request->thumbnail,
            'sale' => $request->sale,
            'status' => $request->status,
            'categoria' => $request->categoria,
            'destaque' => $request->destaque,
            

    ]);
        $request->session()->flash('message', ' cadatrado com sucesso');
        return redirect()->to('Products');
    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reg = ProductsModel::findOrFail($id);
 $data['reg'] = $reg;
 return view('products.edit', $data);
 }

 /* * 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
 */
 public function edit($id)
 {


    $data = array();
    $data['categoria_id'] = $id;
       
    //parte da categoria
        $catglist = CategoriaModel::get();
        $data['catglist']= $catglist;
    //fim da categoria

    
    $reg = CategoriaModel::findOrFail($id);
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
    public function update(Request $request, $id)
    {
        //
         
        $reg = CategoriaModel::findOrFail($id);
        // dd($request->all());
        $reg->update
        ([
                'name' => $request->name,
                'collection' => $request->collection,



        ]);
        
        $request->session()->flash('message', ' Editado com sucesso');
        return redirect()->to('categoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
 * @return \Illuminate\Http\Response
 */
 public function destroy($id)
 {
        //
    }
}

