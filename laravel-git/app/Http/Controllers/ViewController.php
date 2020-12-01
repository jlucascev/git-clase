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
    public function getFormView(){
    	//vista formulario
    	return "getFormView";
    }
}

