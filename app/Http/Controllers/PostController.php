<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\PostModel;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $listblog = PostModel::get();
        $data['listblog']= $listblog;

   
      
        return view('post.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data= array();

        $listblog = PostModel::get();
        $data['listblog']= $listblog;



        $data = array();
        return view('post.create', $data);
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
        
        
        PostModel::create([
           
           
            
            'autor' => $request->autor,
            'titulo' => $request->titulo,
            'desc' => $request->desc,
            'dateblog' => $request->dateblog,
            

    ]);
        $request->session()->flash('message', ' cadatrado com sucesso');
        return redirect()->to('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reg = PostModel::findOrFail($id);
 $data['reg'] = $reg;
 return view('post.edit', $data);
 }

 /* * 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
 */
 public function edit($id)
 {
 $reg = PostModel::findOrFail($id);
 $data['reg'] = $reg;
 return view('post.edit', $data);
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

