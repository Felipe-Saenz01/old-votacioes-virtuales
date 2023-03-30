<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    public function show(){
        return view('admin.admin');
    }

    //muestra formulario de registro
    public function create(){
        return view('admin.register');
    }

    // Registra nuevo usuario
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required']
        ]);

        //Encriptar contraseña
        $formFields['password'] = bcrypt($formFields['password']);
        //Crea el usuario
        $user = User::create($formFields);
        // logea el usuario automaticamente
        auth()->login($user);
        //lo lleva a la pag inicial de admin
        return redirect('/admin');
        
    }
    // Cerrar session de usuario administrador, a demas de cacelar su session
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');

    }
    // Muestra el formulario de logeo
    public function login(){
        return view('admin.login');
    }
    // Autentica y valida para realizar el logeo
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/admin');
        }

        return back()->withErrors(['email'=>'Correo Invalido'])->onlyInput('email');

    }
}
