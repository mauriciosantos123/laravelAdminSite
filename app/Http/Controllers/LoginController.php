<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\UsuarioModel;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['message']= $request->session()->get('message');
        return view('login.index',$data);
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
        $res = UsuarioModel::where('email',$request->email)->get()->first();
        //    $res = $res[0];
         //   print_r($res);
          //  die();
           
            $teste= strlen($res->email);
            //echo($res);
          
            //die();
            if(isset($teste) ){
                if($res->password==$request->password){
                    $request->session()->put('id',  $res->id);
                    $request->session()->put('auth',  1);
                    return redirect()->to('admin');

                }else {
                   $request->session()->put('auth',  0);
                    $request->session()->flash('message', ' senha incorreta');
  
                   
                   return redirect()->to('login');
                    

                }

            }else{
                $request->session()->put('auth',  0);
                $request->session()->flash('message', ' verificar email e senha ');
                
                return redirect()->to('login');
        }
    }
    public function destroy(Request $request)
    {
           $request->session()->flush();
           return redirect()->to('login');
       }
}
