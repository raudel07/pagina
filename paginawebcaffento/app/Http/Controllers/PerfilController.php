<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('layouts.usuarios.perfil');
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
