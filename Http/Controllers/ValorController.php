<?php

namespace App\Http\Controllers;
use App\Models\Valor;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProductoRequest;

use Illuminate\Support\Facades\Storage;


use Illuminate\Support\Facades\DB;


class ValorController extends Controller
{
   
public function __invoke(){
        return view('producto.valor');
    }
    

    public function update(Request $request){
        
$respuest = $request->val;
$actualixar = DB::table('valors')->update(['va'=> $respuest]);
                $actualixar;

// function function_alert($message) {
      
//                     // Display the alert box 
//                         echo "<script>alert('$message');</script>";
//                     }
                    
//                     function_alert("Notificacion enviada");
                    
         //return redirect()->to('producto/');
         
         return back()->with('success', 'formulario validado exitosamente');
    }
    
}