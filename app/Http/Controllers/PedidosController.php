<?php

namespace App\Http\Controllers;

use App\Mail\pedidoResolvidoMail;
use App\Models\instituicao;
use App\Models\pedidos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

use function GuzzleHttp\Promise\all;

class PedidosController extends Controller
{

    private $objPedidos;
    private $objInstituicao;

    public function __construct(){
        $this->objPedidos = new Pedidos();
        $this->objInstituicao = new Instituicao();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaPedidos = $this->objPedidos->all()->sortByDesc('created_at');
        $listaInstituicao = $this->objInstituicao->all();
        $numPedidos = $this->objPedidos->all()->count();
        return view('pedidos.pedidos', compact('listaPedidos', 'listaInstituicao', 'numPedidos'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   if(session('user')){
            if(session('user')->user_tipo == "cliente"){
                $pedido = new Pedidos();
                $pedido->pedi_tipo = $request->input('pedi_tipo');
                $pedido->pedi_instituicao = $request->input('pedi_instituicao');
                $pedido->pedi_prazo = $request->input('pedi_prazo');
                $pedido->pedi_cliente = session('user')->user_id;
                $pedido->pedi_arquivo = $request->file('pedi_arquivo')->store('pedidos\\'.session('user')->email);
                $pedido->pedi_nivel = $request->input('pedi_nivel');
                $pedido->pedi_descricao = $request->input('pedi_descricao');
                $pedido->pedi_assunto = $request->input('pedi_assunto');
                    if(! $pedido->save()){
                        $addEspecialista['success'] = false;
                        $addEspecialista['mensagem'] = 'Erro na submissão de pedido.';
                        return response()->json($addEspecialista);
                    }
                $addEspecialista['success'] = true;
                $addEspecialista['mensagem'] = 'Pedido feito com sucesso.';
                return response()->json($addEspecialista);
            }
            $addEspecialista['success'] = false;
            $addEspecialista['mensagem'] = 'Apenas clientes podem adicionar pedidos.';
            return response()->json($addEspecialista);
        }
        $addEspecialista['success'] = false;
        $addEspecialista['mensagem'] = 'Inicie sessão no sistema para poder fazer pedido.';
        return response()->json($addEspecialista);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedido = pedidos::all()->where('pedi_id', '=', $id)->first();
        return Storage::download($pedido->pedi_arquivo);
    }
    public function resolucao($id)
    {
        $pedido = pedidos::all()->where('pedi_id', '=', $id)->first();
        return Storage::download($pedido->pedi_resolucao);
    }
    public function cancelar($id)
    {
        DB::update('update pedidos set pedi_especialista = ?, pedi_status = ? where pedi_id = ?', [null, 0, $id]);
        return redirect()->route('especialistaPedidos');
    }

    public function resolver($pedido_id){
        DB::update('update pedidos set pedi_especialista = ?, pedi_status = ? where pedi_id = ?', [session('user')->user_id, 1, $pedido_id]);
        return redirect()->route('ContactUs');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function edit(pedidos $pedidos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pedidos $pedidos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function destroy(pedidos $pedidos)
    {
        //
    }

    public function procurar(){
        $pedidos = pedidos::all()->where('pedi_cliente','=', session('user')->user_id);
        $resposta['success'] = true;
        return response()->json(['success' => $resposta, 'pedidos' => $pedidos]);
    }

    public function enviarTrabalho(Request $request){
        $pedido = $request->input('pedido_id');
        $cliente_id = $request->input('pedido_cliente');
        $cliente = User::all()->where('user_id', '=', $cliente_id)->first();
        $pedi = pedidos::all()->where('pedi_id', '=', $pedido)->first();
        $pedi_arquivo = $request->file('fileTrabResolvido')->store('Rosulucoes\\'.$cliente->email);
        $resultado = DB::update('update pedidos set pedi_status = ?, pedi_resolucao = ? where pedi_id = ?', [2, $pedi_arquivo, $pedido]);
        if($resultado){
            $detalhes = [
                'nome' => $cliente->user_nome,
                'pedido' => $pedido,
                'tipo_pedido' => $pedi->pedi_tipo,
                'assunto_pedido' => $pedi->pedi_assunto
            ];
            if(!!Mail::to($cliente->email)->send(new pedidoResolvidoMail($detalhes))){
                $resposta['mensagem'] = 'Houve algum problema no momento de submissão do trabalho';
                $resposta['success'] = false;
                return response()->json($resposta);        
            }
            $resposta['success'] = true;
            $resposta['mensagem'] = 'Trabalho enviado para o cliente.';
            return response()->json($resposta);
        }
        $resposta['mensagem'] = 'Houve algum problema no momento de submissão do trabalho';
        $resposta['success'] = false;
        return response()->json($resposta);
    }
}
