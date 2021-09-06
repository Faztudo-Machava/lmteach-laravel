<?php

namespace App\Http\Controllers;

use App\Models\instituicao;
use App\Models\pedidos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $listaPedidos = $this->objPedidos->all();
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
    {
        $pedido = new Pedidos();
        $pedido->pedi_tipo = $request->input('pedi_tipo');
        $pedido->pedi_instituicao = $request->input('pedi_instituicao');
        $pedido->pedi_prazo = $request->input('pedi_prazo');
        $pedido->pedi_cliente = session('user')->user_id;
        $pedido->pedi_arquivo = $request->file('pedi_arquivo')->store('pedidos/'.session('user')->email);
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function show(pedidos $pedidos)
    {
        //
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
}
