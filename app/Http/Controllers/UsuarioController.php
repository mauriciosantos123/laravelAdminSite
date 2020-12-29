<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\UsuarioModel;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;

class UsuarioController extends Controller {

    private function process_form(Request $request) {


        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['gender'] = $request->gender;
        $data['birthdate'] = $request->birthdate;
        $data['password'] = $request->password;
        $data['phone'] = $request->phone;


        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        

        $listusu = UsuarioModel::get();
        $data['listusu'] = $listusu;

        $data['list'] = array();
        $html =  view('usuario.index', $data);
        return Authenticate::logged($request, $html);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
   
        $data = array();
        return view('usuario.create', $data);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        Authenticate::logged($request);
        //
        UsuarioModel::create($this->process_form($request));
        $request->session()->flash('message', ' cadatrado com sucesso');
        return redirect()->to('usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request) {
        Authenticate::logged($request);

        UsuarioModel::create($this->process_form($request));
        $request->session()->flash('message', ' cadatrado com sucesso');
        return view('usuario.edit', $data);
    }

    /*     * 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request,$id) {
       
        $data = array();
        $data['id'] = $id;

        $reg = UsuarioModel::findOrFail($id);
        $data['reg'] = $reg;
        return view('usuario.edit', $data);
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
   
        $reg = UsuarioModel::findOrFail($id);
        // dd($request->all());

        $reg->update($this->process_form($request));

        $request->session()->flash('message', ' Editado com sucesso');
       

        return redirect()->to('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req, $id) {
        
        //
        UsuarioModel::where("id", $id)->delete();
        $req->session()->flash('message', ' apagado com sucesso');
        return redirect()->to('usuarios');
    }

}
