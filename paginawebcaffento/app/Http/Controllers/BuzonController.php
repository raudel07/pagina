<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Buzon;
use Illuminate\Support\Facades\Auth;

class BuzonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('layouts.usuarios.buzon');
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            
            'titulo' => 'required|min:3',
            'mensaje' => 'required|min:3',
           
        ]);
        if ($validator->fails()) {
            return back()
            ->withInput()
            ->with('ErrorInsert','Favor de llenar todos los campos')
            ->withErrors($validator); 
        } else {
           /* $usuario =reservacions()->create($inforeservacion);*/
            $buzon=  Buzon::create([
                'id_usuario' =>Auth::user()->id,
            'titulo' => $request->titulo,
            'mensaje' => $request->mensaje
            ]);
            return back()->with('Listo', 'El mensaje fue enviado');
        }
    }
}
