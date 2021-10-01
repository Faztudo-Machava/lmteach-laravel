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
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
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
            $listaPedidos = $this->objPedidos->all()->where('pedi_cliente','=',session('user')->user_id)->sortBy('pedi_prazo');
            $numPedidos = $this->objPedidos->all()->where('pedi_cliente','=',session('user')->user_id)->count();
            $numPedidosPendentes = $this->objPedidos->all()->where('pedi_cliente','=',session('user')->user_id)->where('pedi_status','=', 0)->count();
            $numPedidosResolvido = $this->objPedidos->all()->where('pedi_cliente','=',session('user')->user_id)->where('pedi_status','=', 2)->count();
            $numPedidosEm = $this->objPedidos->all()->where('pedi_cliente','=',session('user')->user_id)->where('pedi_status','=', 1)->count();
        } else{
            $listaPedidos = $this->objPedidos->all()->sortByDesc('pedi_prazo');
            $numPedidos = $this->objPedidos->all()->count();
            $numPedidosPendentes = $this->objPedidos->all()->where('pedi_status','=', 0)->count();
            $numPedidosResolvido = $this->objPedidos->all()->where('pedi_status','=', 2)->count();
            $numPedidosEm = $this->objPedidos->all()->where('pedi_status','=', 1)->count();
        }
        $listaEspecialidades = $this->objEspecialidade->all();
        $listaInstituicao = $this->objInstituicao->all();
        return view('pedidos.userPedidos', compact('listaPedidos', 'numPedidos', 'listaInstituicao', 'listaEspecialidades', 'numPedidosPendentes', 'numPedidosResolvido', 'numPedidosEm'));
    }
    public function indexEspecialista(){ 
        $listaPedidos = $this->objPedidos->all()->where('pedi_especialista','=',session('user')->user_id)->sortByDesc('pedi_prazo');
        $numPedidos = $this->objPedidos->all()->where('pedi_especialista','=',session('user')->user_id)->count();
        $numPedidosResolvido = $this->objPedidos->all()->where('pedi_status','=', 2)->count();
        $numPedidosEm = $this->objPedidos->all()->where('pedi_status','=', 1)->count();
        $listaEspecialidades = $this->objEspecialidade->all();
        $listaInstituicao = $this->objInstituicao->all();
        return view('pedidos.especialistaPedidos', compact('listaPedidos', 'numPedidos', 'listaInstituicao', 'listaEspecialidades', 'numPedidosResolvido', 'numPedidosEm'));
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
        $emailSend = $request->input('cli_email');
        $utilizador->password = Hash::make($request->input('cli_senha'));
        $utilizador->user_tipo = 'cliente';
        $utilizador->verification_code = sha1(time());
        //$utilizador->user_img = $request->file('cli_img')->store('usuarios/'.$emailSend);
        $utilizador->user_img = "";
        $email = User::all()->where('email','=',$utilizador->email)->count();
        if($email > 0){
            $addCliente['success'] = false;
            $addCliente['mensagem'] = 'Esse email já esta registado no sistema.';
            return response()->json($addCliente);    
        }
        if($utilizador->save()){
            $detalhes = [
                'nome' => $utilizador->user_nome,
                'assunto' => 'Confirmação do email',
                'verification_code' => $utilizador->verification_code
            ];
            //session(['user' => $utilizador]);
            if(!!Mail::to($emailSend)->send(new VerifyMail($detalhes))){
                $addCliente['mensagem'] = 'Houve algum problema no processo de envio de email de confimação.';
                $addCliente['success'] = false;
                return response()->json($addCliente);
            }
            $addCliente['mensagem'] = 'Cadastrado com sucesso, porfavor confirme o seu email.';
            $addCliente['success'] = true;
            return response()->json($addCliente);
        }
        $addCliente['mensagem'] = 'Houve um problema no seu registo.';
        $addCliente['success'] = false;
        return response()->json($addCliente);
        
        
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
        $utilizador->verification_code = sha1(time());
        $email = User::all()->where('email','=',$utilizador->email)->count();
        //$utilizador->user_img = $request->file('esp_img')->store('usuarios/'.$utilizador->email);
        $utilizador->user_img = "";
        if($email > 0){
            $addEspecialista['success'] = false;
            $addEspecialista['mensagem'] = 'Esse email já esta registado no sistema.';
            return response()->json($addEspecialista);    
        }
        $utilizador->save();
        $detalhes = [
            'nome' => $utilizador->user_nome,
            'assunto' => 'Confirmação do email',
            'verification_code' => $utilizador->verification_code
        ];
        if(!! Mail::to($utilizador->email)->send(new VerifyMail($detalhes))){
            $addCliente['mensagem'] = 'Houve algum problema no processo de envio de email de confimação.';
            $addCliente['success'] = false;
            return response()->json($addCliente);
        }
        $addEspecialista['success'] = true;
        $addEspecialista['mensagem'] = 'Especialista registado com sucesso, confirme o email apartir da sua caixa de mensagens.';
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
    public function update(Request $request)
    {
        $usuario_id = $request->input('usuario_id');

        //Atualizacao dos dados do cliente
        if(session('user')->user_tipo == 'cliente'){
            $nome = $request->input('ruser_name');
            // if($request->file('update_img')){
            //     $img = $request->file('update_img')->store('usuarios\\'.session('user')->email);
            // }
            $resultado = DB::table('users')->where('user_id', $usuario_id)->update(['user_nome' => $nome]);
            if($resultado){
                session('user')->user_nome = $nome;
                // session('user')->user_img = $img;
                $upCliente['mensagem'] = 'Dados atualizados com sucesso.';
                $upCliente['success'] = true;
                return response()->json($upCliente);
                  
            }
            $upCliente['mensagem'] = 'Houve algum problema no processo de actualização.';
            $upCliente['success'] = false;
            return response()->json($upCliente); 
            
            
        } 

        //Atualizacao dos dados do especialista
        $nome = $request->input('ruser_name');
        $telefone = $request->input('ruser_telefone');
        // if($request->file('update_img')){
        //     $img = $request->file('update_img')->store('usuarios\\'.session('user')->email);
        // }
        // else{
        //     $img = DB::table('users')->where('user_id', '=', $usuario_id)->value('user_img');
        // }
        $resultado = DB::table('users')->where('user_id', $usuario_id)->update(['user_nome' => $nome, 'user_telefone' => $telefone]);
        if($resultado){
            session('user')->user_nome = $nome;
            session('user')->user_telefone = $telefone;
            $upEspecialista['mensagem'] = 'Dados atualizados com sucesso.';
            $upEspecialista['success'] = true;
            return response()->json($upEspecialista);
        }
        $upEspecialista['mensagem'] = 'Houve algum problema no processo de actualização.';
        $upEspecialista['success'] = false;
        return response()->json($upEspecialista);
    }

    public function updateImg(Request $request){
        $usuario_id = session('user')->user_id;
        $img = $request->file('update_img')->store('usuarios\\'.session('user')->email);
        $resultado = DB::table('users')->where('user_id', $usuario_id)->update(['user_img' => $img]);
        if($resultado){
            session('user')->user_img = $img;
            $upEspecialista['mensagem'] = 'Imagem atualizada com sucesso.';
            $upEspecialista['success'] = true;
            return response()->json($upEspecialista);
        }
        $upEspecialista['mensagem'] = 'Houve algum problema no processo de actualização.';
        $upEspecialista['success'] = false;
        return response()->json($upEspecialista);
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

    public function cadAdmin(){
        $utilizador = new User();
        $utilizador->user_nome = 'Admin';
        $utilizador->email = 'secreto.admin@gmail.com';
        $utilizador->password = Hash::make('Secret@007');
        $utilizador->user_tipo = 'admin';
        $utilizador->verification_code = sha1(time());
        $utilizador->is_verified = 1;
        $utilizador->user_img = '';
        if($utilizador->save()){
            return response()->json(['Mensagem' => 'Administrador registado com sucesso'], Response::HTTP_OK);
        } else{
            return response()->json(['Mensagem' => 'Deu merda.'], Response::HTTP_OK);
        }
    }

    public function resetPassword(Request $request){
        $code = $request->input('verification_code');
        $numUser = User::all()->where('verification_code','=',$code)->count();
        if($numUser > 0){
            $senha = Hash::make($request->input('user_pass'));
            if(DB::update('update users set password = ? where verification_code = ?', [$senha, $code])){
                $resposta['success'] = true;
                $resposta['mensagem'] = 'Senha alterada com sucesso, já pode iniciar a secção usando a nova senha.';
                return response()->json($resposta);    
            }
            $resposta['success'] = false;
            $resposta['mensagem'] = 'Houve algum problema na atualização da senha';
            return response()->json($resposta);

        }
        $resposta['success'] = false;
        $resposta['mensagem'] = 'Esse utilizador não encontrado.';
        return response()->json($resposta);
    }
}
