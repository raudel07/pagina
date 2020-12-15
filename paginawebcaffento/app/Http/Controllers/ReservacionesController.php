<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Reservacion;
use Illuminate\Support\Facades\Auth;

class ReservacionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $reservations =\DB::table('reservacions') 
        ->select('reservacions.*')
        ->get();
            return view('layouts.usuarios.reservaciones')->with('reservations', $reservations);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'num_mesa' => 'min:1',
            'fecha' => 'date',
            'num_personas' => 'required|max:4',
            'motivo' => 'max:50',
            'descripcion'=>'max:200',
        ]);
       /* $inforeservacion=[
            'id_usuario' =>Auth::user()->id,
            'num_mesa' => $request->num_mesa,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'descripcion' => $request->descripcion,
            'num_personas' => $request->num_personas,
            'motivo' => $request->motivo,
        ];
        $usuario = User::create($infousuario);*/
        if ($validator->fails()) {
            return back()
                ->withInput()
                ->with('ErrorInsert', 'Indique el número de personas')
                ->withErrors($validator);
        } else {
           /* $usuario =reservacions()->create($inforeservacion);*/
            $reservacion=  Reservacion::create([
                'id_usuario' =>Auth::user()->id,
            'num_mesa' => $request->num_mesa,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'descripcion' => $request->descripcion,
            'num_personas' => $request->num_personas,
            'motivo' => $request->motivo,
            ]);
            return back()->with('Listo', 'La reservacion fue un exito');
        }
    }
}
