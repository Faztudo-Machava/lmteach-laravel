<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\instituicao;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class WhatsappContactController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | WhatsappContactController
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    public function WhatsappContact(){

        $listaInstituicao = instituicao::all();
        return view("user/contacteNos", compact("listaInstituicao"));
        

    }


}
