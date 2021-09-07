<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\VerifyMail;
use App\Models\especialidade;
use App\Models\instituicao;
use App\Models\pedidos;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{


    private $objPedidos;
    private $objEspecialidade;
    private $objInstituicao;

    public function __construct()
    {
        $this->objPedidos = new Pedidos();
        $this->objEspecialidade = new Especialidade();
        $this->objInstituicao = new Instituicao();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $listaEspecialidades = $this->objEspecialidade->all();
        $listaInstituicao = $this->objInstituicao->all();
        return view('user.userDash', compact('listaInstituicao', 'listaEspecialidades'));
    }

    public function indexPedidos(){
        if (session('user')->user_tipo == 'cliente'){
            $listaPedidos = $this->objPedidos->all()->where('pedi_cliente','=',session('user')->user_id)->sortByDesc('pedi_prazo');
            $numPedidos = $this->objPedidos->all()->where('pedi_cliente','=',session('user')->user_id)->count();
        } else{
            $listaPedidos = $this->objPedidos->all()->sortByDesc('pedi_prazo');
            $numPedidos = $this->objPedidos->all()->count();
        }
        
        $listaEspecialidades = $this->objEspecialidade->all();
        $listaInstituicao = $this->objInstituicao->all();
        return view('pedidos.userPedidos', compact('listaPedidos', 'numPedidos', 'listaInstituicao', 'listaEspecialidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    // private function verifyEmail() {
        
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCliente(Request $request)
    {
        $utilizador = new User();
        $utilizador->user_nome = $request->input('cli_nome');
        $utilizador->email = $request->input('cli_email');
        $utilizador->password = Hash::make($request->input('cli_senha'));
        $utilizador->user_tipo = 'cliente';
        $email = User::all()->where('email','=',$utilizador->email)->count();
        if($email > 0){
            $addCliente['success'] = false;
            $addCliente['mensagem'] = 'Esse email já esta registado no sistema.';
            return response()->json($addCliente);    
        }
        if($utilizador->save()){
            session(['user' => $this->user]);
            $login['mensagem'] = 'Confirme o email, verifique o inbox do seu email';
            $login['success'] = true;
            Mail::to($utilizador->email)->send(new VerifyMail());
        }
        
        
        return response()->json($login);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeEspecialista(Request $request)
    {
        $utilizador = new User();
        $utilizador->user_nome = $request->input('esp_nome');
        $utilizador->email = $request->input('esp_email');
        $utilizador->user_telefone = $request->input('esp_telefone');
        $utilizador->user_especialidade = $request->input('esp_especialidade');
        $utilizador->user_instituicao = $request->input('esp_instituicao');
        $utilizador->password = Hash::make($request->input('esp_senha'));
        $utilizador->user_tipo = 'especialista';
        $email = User::all()->where('email','=',$utilizador->email)->count();
        if($email > 0){
            $addEspecialista['success'] = false;
            $addEspecialista['mensagem'] = 'Esse email já esta registado no sistema.';
            return response()->json($addEspecialista);    
        }
        $utilizador->save();
        $addEspecialista['success'] = true;
        $addEspecialista['mensagem'] = 'Especialista registado com sucesso';
        return response()->json($addEspecialista);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}