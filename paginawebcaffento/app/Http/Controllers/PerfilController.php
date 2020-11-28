<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index()
    {
        return view('layouts.usuarios.perfil');
    }
    public function reservaciones()
    {
        return view('layouts.usuarios.reservaciones');
    }
    public function serviciodomicilio()
    {
        return view('layouts.usuarios.servicio_domicilio');
    }
    public function buzon()
    {
        return view('layouts.usuarios.buzon');
    }
}
