<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        if(Auth::user()->nivel =='cliente'){return redirect('/index');}
        return view('layouts.administrador.admin');
    }
    
}
