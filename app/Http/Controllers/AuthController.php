<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmarEspecialistaMail;
use App\Models\instituicao;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request){
        $userLog  = User::all()->where('email', '=', $request->input('log_email'))->first();
        if($userLog){
            if($userLog->user_tipo == 'cliente' || $userLog->user_tipo == 'admin'){
                if($userLog->is_verified == 1){
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
            else{
                $data = $userLog->created_at;
                if($data <= '2021-11-01 00:00:00'){
                    if($userLog->is_verified == 1){
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
                } else{
                    if($userLog->is_verified == 1 && $userLog->is_confirmed){
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
            }
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
            DB::update('update users set is_verified = ? where verification_code = ?', [1, $verification_code]);
            $detalhes = $user;
            Mail::to("lmteach.inc@gmail.com")->send(new ConfirmarEspecialistaMail($detalhes));
            if($user->user_tipo == 'cliente'){
                return redirect()->route('home')->with(['mensagem' => 'Conta verificada com sucesso, está pronta para ser usada para operações dentro do site', 'sucesso' => true]);
            } else{
                return redirect()->route('home')->with(['mensagem' => 'Conta verificada com sucesso, aguarde com que a nossa equipe faça a validação do documento/certificado, a notificação de confirmação será enviada para o seu email', 'sucesso' => true]);
            }

        }
    }

    public function confirmarEspecialista(){
        $verification_code = \Illuminate\Support\Facades\Request::get('code');
        $user = User::where(['verification_code' => $verification_code])->first();
        if($user){
            DB::update('update users set is_confirmed = ? where verification_code = ?', [1, $verification_code]);
            return "Confirmada a insrição do especialista";
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
