<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    //Control de los ficheros
    public function uploadFile(Request $request){

    	$response = "";
    	
    	//Leer el archivo del request
    	$file = $request->file('file');

    	if(!empty($file)){
    		//Almacenar el archivo con nombre original
    		$path = $file->storeAs(
			    'files', $file->getClientOriginalName()
			);
    		$response = "Archivo guardado";
    	}else{
    		$response = "No hay archivo";
    	}


    	//Generar respuesta
    	return redirect()->route('home',['msg' => $response]);
    }

    public function downloadFile($file){
    	return Storage::download('files/'.$file);		    	
    }
}