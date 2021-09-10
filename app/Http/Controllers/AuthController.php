<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    
    public function verificarUser(){
        $verification_code = \Illuminate\Support\Facades\Request::get('code');
        $user = User::where(['verification_code' => $verification_code])->first();
        if($user){
            $user->is_verified = 1;
            $user->save();
            return redirect()->route('home');
        }
    }
}
