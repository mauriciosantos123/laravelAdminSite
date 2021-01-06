<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\PostModel;

class PostController extends Controller
{
    
    private function process_form(Request $request) {


        
        $data['autor'] = $request->autor;
        $data['titulo'] = $request->titulo;
        $data['desc'] = $request->desc;
        $data['dateblog'] = $request->dateblog;
        $data['categoria'] = $request->categoria;
        $data['img_blog'] = $request->img_blog;



        return $data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



     
    public function index(Request $request)
    {
        if ($request->session()->get('auth')){ 
        $listblog = PostModel::get();
        $data['listblog']= $listblog;

   
      
        return view('post.index', $data);
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
    public function create(Request $request)
    {   
        if ($request->session()->get('auth')){ 

        $data= array();

        $listblog = PostModel::get();
        $data['listblog']= $listblog;



        $data = array();
        return view('post.create', $data);
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
    public function store(Request $request)
    {
        //
        
        
        PostModel::create($this->process_form($request));
        $request->session()->flash('message', ' cadatrado com sucesso');
        return redirect()->to('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request ,$id)
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
 public function edit(Request $request,$id)
 {

        $data = array();
        $data['blog_id'] = $id;
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
        
        $reg = PostModel::findOrFail($id);
        // dd($request->all());
        $reg->update($this->process_form($request));

        $request->session()->flash('message', ' Editado com sucesso');
        return redirect()->to('post');
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
        
        PostModel::where("blog_id", $id)->delete();
        $req->session()->flash('message', ' apagado com sucesso');
        return redirect()->to('post');
    }
}

