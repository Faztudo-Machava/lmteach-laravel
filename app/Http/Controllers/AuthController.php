<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request){
        $credencias = [
            'email' => $request->input('log_email'),
            'password' => $request->input('log_senha')
        ];
        if(Auth::attempt($credencias)){
            $user = Auth::user();
            session(['user' => $user]);
            $login['success'] = true;
            return response()->json($login);
            //return redirect()->route('usuario');
        }
        $login['success'] = false;
        $login['mensagem'] = 'Dados invalidos';
        return response()->json($login);
    }

    public function logout(){
        Auth::logout();
        Session::forget('user');
        return redirect()->route('home');
    }
}
