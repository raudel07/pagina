<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Opinion;

class OpinionController extends Controller
{
    public function index()
    {
        return view('layouts.index.opinion');
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name'=> 'required|min:3',
            'email' => 'required|min:3|email',
            'mensaje' => 'required|min:3',
           
        ]);
        if ($validator->fails()) {
            return back()
            ->withInput()
            ->with('ErrorInsert','Favor de llenar todos los campos')
            ->withErrors($validator); 
        } else {
           /* $usuario =reservacions()->create($inforeservacion);*/
            $opinion=  Opinion::create([
                'name' =>$request->name,
            'email' => $request->email,
            'mensaje' => $request->mensaje
            ]);
            return back()->with('Listo', 'El mensaje fue enviado');
        }
    }
}
