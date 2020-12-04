<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ViewController extends Controller
{
    //control de las vistas
    public function getListView(){
    	
        //Leer los archivos que haya en files
        $files = Storage::files("files");

        //Quitarles del nombre la parte de files/
        foreach ($files as $index => $file) {
            $files[$index] = str_replace("files/", "", $file);
        }

        //Ordenar el array alfabéticamente

        natcasesort($files);

        
        return view('lista',["files"=>$files]);

    }
    public function getFormView($mensaje = null){
    	//vista formulario
    	$params = ["msg" => ($mensaje ? $mensaje : "")];
    	return view('welcome',$params);
    }
}

