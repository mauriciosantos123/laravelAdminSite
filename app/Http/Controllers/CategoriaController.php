<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriaModel;
class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $catglist = CategoriaModel::get();
        $data['listcatg']= $catglist;

        return view('categoria.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $data= array();



            $catglist = CategoriaModel::get();
            $data['catglist']= $catglist;
        return view('categoria.create', $data);
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

        
        CategoriaModel::create([
           
            'name' => $request->name,
            'collection' => $request->collection,
            

    ]);
        $request->session()->flash('message', ' cadatrado com sucesso');
        return redirect()->to('categoria');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reg = \App\Models\CategoriaModel::findOrFail($id);
        $data['reg'] = $reg;
        return view('categoria.edit', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $data = array();
        $data['categoria_id'] = $id;
        
        $reg = CategoriaModel::findOrFail($id);
        $data ["registro"] = $reg;
      

        return view('categoria.edit',$data);
        
  

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
