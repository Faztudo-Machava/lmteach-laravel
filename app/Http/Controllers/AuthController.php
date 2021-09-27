<?php

namespace App\Http\Controllers;

use App\Models\instituicao;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request){
        $userLog  = User::all()->where('email', '=', $request->input('log_email'))->first();
        if($userLog){
            if($userLog->is_verified == 1 ){
                $credencias = [
                    'email' => $request->input('log_email'),
                    'password' => $request->input('log_senha')
                ];
                if(Auth::attempt($credencias)){
                    $user = Auth::user();
                    session(['user' => $user]);
                    $login['success'] = true;
                    return response()->json($login);
                }
            } 
            $login['success'] = false;
            $login['mensagem'] = 'Dados invalidos';
            return response()->json($login);
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
            DB::update('update users set is_verified = ?, email_verified_at = ? where verification_code = ?', [1, time(), $verification_code]);
            return redirect()->route('home');
        }
    }

    public function passResetPage(){
        $listaInstituicao = instituicao::all();
        $verification_code = \Illuminate\Support\Facades\Request::get('code');
        return view('user.passwordReset.passwordReset', compact('verification_code', 'listaInstituicao'));
    }

    public function reset(){
        $listaInstituicao = instituicao::all();
        return view("user.passwordReset.email",compact('listaInstituicao'));

    }
}
