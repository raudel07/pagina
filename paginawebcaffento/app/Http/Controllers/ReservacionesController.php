<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\reservaciones;

class ReservacionesController extends Controller
{
    public function index()
    {
        return view('layouts.usuarios.reservaciones');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'num_mesa' => 'required|min:3',
            'fecha' => 'required|date',
            'hora' => 'required|time',
            'descripcion' => 'max:200',
            'num_personas' => 'max:4',
            'motivo' => 'required|max:50'
        ]);
        if ($validator->fails()) {
            return back()
                ->withInput()
                ->with('ErrorInsert', 'Favor de llenar todo los campos')
                ->withErrors($validator);
        } else {
            $reservacion =  reservaciones::create([
                'num_mesa' => $request->num_mesa,
                'fecha' => $request->fecha,
                'hora' => $request->hora,
                'descripcion' => $request->descaripcion,
                'num_personas' => $required->num_personas,
                'motivo' => $request->motivo,
            ]);
            return back()->with('Listo', 'Se a registrado correctamente');
        }
    }
}
