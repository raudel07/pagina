<?php

namespace App\Http\Controllers;

use Dotenv\Validator as DotenvValidator;
use Illuminate\Http\Request;
use Validator;
use App\User;
use Hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function __contruct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $usuarios =\DB::table('users') 
        ->select('users.*')
        ->orderBy('id', 'DESC')
        ->get();
        if(Auth::user()->nivel !='admin'){return redirect('/admin');}
        return view('layouts.administrador.usuarios')->with('usuarios',$usuarios);
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'nombre'=>'required|min:3|max:20',
            'ap'=>'required|min:3|max:30',
            'am'=>'required|min:3|max:30',
            'telefono'=> 'required|min:10|max:10',
            'email'=> 'required|min:3|email',
            'pass1'=>'required|min:3|required_with:pass2|same:pass2',
            'pass2'=>'required|min:3'
        ]);
        if($validator ->fails()){
            return back()
            ->withInput()
            ->with('ErrorInsert','Favor de llenar todo los campos')
            ->withErrors($validator);
        }else{
            $usuario=  User::create([
                'name'=>$request->nombre,
                'ap'=>$request->ap,
                'am'=>$request->am,
                'telefono'=>$request->telefono,
                'img'=>'default.jpg',
                'nivel'=>'cliente',
                'email'=>$request->email,
                'password'=>Hash::make($request->pass1)
            ]);
            return back()->with('Listo', 'Se a registrado correctamente');
        }
    }
    public function destroy($id){
        $user = User::find($id);
        if($user->img !='default.jpg'){
            if(files_exists(public_path('users/'.$user->img))){
                unlink(public_path('users/'.$user->img));
            }
        }
        $user->delete();
        return back()->with('Listo','El registro se eliminó correctamente'); 
    }
    public function editarUsuario(Request $request){
        $user = User::find($request->id);
        $validator = Validator::make($request->all(),[
            'nombre'=>'required|min:3|max:20',
            'ap'=>'required|min:3|max:30',
            'am'=>'required|min:3|max:30',
            'telefono'=> 'required|min:10|max:10',
            'email'=> 'required|min:3|email',
        ]);
       if($validator ->fails()){
           return back()
           ->withInput()
           ->with('ErrorInsert','Favor de llenar todos los campos')
           ->withErrors($validator);   
       }else{
           $user->name = $request->nombre;
           $user->ap = $request->ap;
           $user->am = $request->am;
           $user->telefono = $request->telefono;
           $user->email = $request->email;     
           $validator2 = Validator::make($request->all(),[
               'pass1'=>'required|min:3|required_with:pass2|same:pass2',
               'pass2'=>'required|min:3'
           ]);
           if(!$validator2->fails()){
            $user->password = Hash::make($request->pass1);   
           }
            $validator3 = Validator::make($request->all(),[
                'nivel'=>'required|min:5|max:7'
            ]);
            if(!$validator3->fails()){
                $user->nivel = $request->nivel;
            }
           $user->save();
           return back()->with('Listo','El registro se actualizó correctamente');
       }
    }
}
