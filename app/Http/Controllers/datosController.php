<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\datos;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;
class datosController extends Controller
{
    //
     public function crear()
    {
     $datos = datos::all();
     return view('datos.crear', compact('datos'));
    }
    public function store(ItemCreateRequest $request)
    {
        $datos = new datos; 
 
        $datos->nombre = $request->nombre;
        $datos->correo = $request->correo;
        $datos->acerca_de_mi = $request->acerca_de_mi;
    
        $datos->img = $request->file('img')->store('/');
 
        $datos->save();
    
        return ['datos' => $articulos]->with('message','Guardado Satisfactoriamente !');
    }
        public function index()
    {
        $datos = datos::all();
        return view('datos.index', compact('datos')); 
    }
         public function update(ItemUpdateRequest $request, $id)
        {        
            $datos = datos::find($id);
            $datos->nombre = $request->nombre;
            $datos->correo = $request->correo;
            $datos->acerca_de_mi = $request->acerca_de_mi;
 
            if ($request->hasFile('img')) 
             {
                $datos->img = $request->file('img')->store('/');
             }
    
            $datos->save();
 
            Session::flash('message', 'Editado Satisfactoriamente !');
            return Redirect::to('datos');
        }
        public function eliminar($id)
            {
                $datos = datos::find($id);
               $imagen = explode(",", $datos->img);
                Storage::delete($imagen);
                datos::destroy($id);
        
                Session::flash('message', 'Eliminado Satisfactoriamente !');
                return Redirect::to('datos');
            }
}
