<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //control de las vistas
    public function getListView(){
    	//vista llistas
    	return "getListView";
    }
    public function getFormView($mensaje = null){
    	//vista formulario
    	$params = ["msg" => ($mensaje ? $mensaje : "")];
    	return view('welcome',$params);
    }
}

