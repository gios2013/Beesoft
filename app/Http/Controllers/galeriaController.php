<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galeria;
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
class galeriaController extends Controller
{
    //
     public function crear()
    {
     $galeria = galeria::all();
     return view('galeria.crear', compact('galeria'));
    }
    public function store(ItemCreateRequest $request)
    {
        $galeria = new galeria; 
 
        $galeria->nombre = $request->nombre;
        $galeria->empresa = $request->empresa;
        $galeria->imagenes = $request->imagenes;
    
        $galeria->imgenes = $request->file('imagenes')->store('/');
 
        $galeria->save();
    
        return ['galeria' => $imagenes]->with('message','Guardado Satisfactoriamente !');
    }
        public function index()
    {
        $galeria = galeria::all();
        return view('galeria.index', compact('galeria')); 
    }
         public function update(ItemUpdateRequest $request, $id)
        {        
            $galeria = galeria::find($id);
            $galeria->nombre = $request->nombre;
            $galeria->empresa = $request->empresa;
 
            if ($request->hasFile('imagenes')) 
             {
                $galeria->img = $request->file('img')->store('/');
             }
    
            $galeria->save();
 
            Session::flash('message', 'Editado Satisfactoriamente !');
            return Redirect::to('galeria');
        }
        public function eliminar($id)
            {
                $galeria = galeria::find($id);
                $imagen = explode(",", $galeria->img);
                Storage::delete($imagen);
                galeria::destroy($id);
        
                Session::flash('message', 'Eliminado Satisfactoriamente !');
                return Redirect::to('galeria');
            }
}