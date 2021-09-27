<?php

namespace App\Http\Controllers;

use App\Models\especialidade;
use App\Models\instituicao;
use App\Models\pedidos;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $objEspecialidade;
    private $objInstituicao;
    private $objPedidos;

    public function __construct(){
        $this->objEspecialidade = new Especialidade();
        $this->objInstituicao = new Instituicao();
        $this->objPedidos = new Pedidos();
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
        $listaPedidos = $this->objPedidos->all()->sortByDesc('created_at');
        $numPedidos = $this->objPedidos->all()->count();
        return view('home.homePage', compact('listaEspecialidades','listaInstituicao', 'listaPedidos', 'numPedidos'));
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
        //
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
