<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriaModel;

class CategoriaController extends Controller {


    private function process_form(Request $request) {


        $data['name'] = $request->name;
        $data['collection'] = $request->collection;
        $data['img_categoria'] = $request->img_categoria;



        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        if ($request->session()->get('auth')){ 
        $catglist = CategoriaModel::get();
        $data['listcatg'] = $catglist;

        return view('categoria.index', $data);
    }else{
        $request->session()->put('auth',  0);
        $request->session()->flash('message', 'Voce não tem permissão ');

        return redirect()->to('login');
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        if ($request->session()->get('auth')){ 
        $data = array();



        $catglist = CategoriaModel::get();
        $data['catglist'] = $catglist;
        return view('categoria.create', $data);
    }else{
            $request->session()->put('auth',  0);
            $request->session()->flash('message', 'Voce não tem permissão ');
    
            return redirect()->to('login');
          }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        if ($request->session()->get('auth')){ 
        //


        CategoriaModel::create($this->process_form($request));
      
        return redirect()->to('categoria');
        $request->session()->flash('alert', ' cadatrado com sucesso');}else{
            $request->session()->put('auth',  0);
            $request->session()->flash('message', 'Voce não tem permissão ');
    
            return redirect()->to('login');
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        if ($request->session()->get('auth')){ 
        $reg = \App\Models\CategoriaModel::findOrFail($id);
        $data['reg'] = $reg;
        return view('categoria.edit', $data);}else{
            $request->session()->put('auth',  0);
            $request->session()->flash('message', 'Voce não tem permissão ');
    
            return redirect()->to('login');
          }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id) {
        if ($request->session()->get('auth')){ 


        $data = array();
        $data['categoria_id'] = $id;

        $reg = CategoriaModel::findOrFail($id);
        $data ["registro"] = $reg;


        return view('categoria.edit', $data);}else{
            $request->session()->put('auth',  0);
            $request->session()->flash('message', 'Voce não tem permissão ');
    
            return redirect()->to('login');
          }



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
        if ($request->session()->get('auth')){ 
        $reg = CategoriaModel::findOrFail($id);
        // dd($request->all());
        $reg->update
                ($this->process_form($request));

        $request->session()->flash('message', ' Editado com sucesso');
        return redirect()->to('categoria');}else{
            $request->session()->put('auth',  0);
            $request->session()->flash('message', 'Voce não tem permissão ');
    
            return redirect()->to('login');
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req, $id) 
    {
        if ($req->session()->get('auth')){ 
        CategoriaModel::where("categoria_id", $id)->delete();
        $req->session()->flash('message', ' apagado com sucesso');
        return redirect()->to('categoria');}else{
            $req->session()->put('auth',  0);
            $request->session()->flash('message', 'Voce não tem permissão ');
    
            return redirect()->to('login');
          }
    }

    //
}
