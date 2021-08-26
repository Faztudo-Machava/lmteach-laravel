@extends('index')
@section('css')

@endsection
@section('titulo')
    Usuario
@endsection
@section('conteudo')
<div class="container-fluid bg-white">
    <div class="container">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{asset('img/avatar.png')}}" class="imgperfil">
                                <div class="mt-3">
                                    <h4>Nome do usuario</h4>
                                    <p class="text-secondary mb-1">Email do usuario</p>
                                    <p class="text-muted font-size-sm">Tipo de usuario</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <a class="" href="" class="active">
                                    <h6 class="h6">Dados dos Pedidos</h6>
                                </a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <a href="">
                                    <h6 class="h6">Meus Trabalhos </h6>
                                </a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <a href="">
                                    <h6 class="h6">Minhas Disciplinas</h6>
                                </a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <a href="">
                                    <h6 class="h6">Notificacoes</h6>
                                </a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <a href="">
                                    <h6 class="h6">Deixar um Pedido</h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nome</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    Nome
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    Email
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Telefone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    Telefone
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Tipo de usuario</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    Tipo de usuario
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Instituição</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    Instituicao
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button class="btn btn-info" data-toggle="modal"
                                        data-target="#userUpdateModal">Atualizar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-sm">
                        <div class="col-sm-12 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    {{-- <div class="col-sm-12 row">
                                        {if $UT == Especialista}
                                        <div class="container-fluid">
                                            <div class="form-group">
                                                <label for="statusPedido"></label>
                                                <select name="Estado" class="form-control col-sm-6 filtro">
                                                    <option class="form-control col-sm-6" id="statusPedido">Todos
                                                    </option>
                                                    <option class="form-control col-sm-6">A fazer</option>
                                                    <option class="form-control col-sm-6">Concluidos</option>
                                                </select>
                                            </div>
                                            <button class="btn btn-success col-sm-2">Ver</button>
                                        </div>
                                        {else}
                                        <select name="Estado" class="form-control col-sm-6 filtro">
                                            <option class="form-control col-sm-6">Todos</option>
                                            <option class="form-control col-sm-6">Sendo feitos</option>
                                            <option class="form-control col-sm-6">Em espera</option>
                                            <option class="form-control col-sm-6">Concluidos</option>
                                        </select>
                                        <button class="btn col-sm-1"
                                            style="background-color: orangered; margin-left: 5px;">Ver</button>
                                        {/if}
                                    </div>
                                    {if $UT = Especialista}
                                    {if $PDET == 0}
                                    <div class="col-sm my-5">
                                        <span class="form-control text-center text-dark">
                                            Voce esta sem Pedidos
                                        </span>
                                    </div>
                                    {else}
                                    <br>
                                    {foreach from=$PDE item=PE}
                                    <div class="col-sm-12 m-2 p-2 row puser"
                                        style="border-radius: 5px; background: rgba(255,255,255, 0.5);">
                                        <span class="col-sm-3 p-1 text-dark">{$PE.pedi_tipo}</span>
                                        <span class="col-sm-3 p-1 text-dark"><a
                                                href="">{$PE.pedi_descricao}</a></span>
                                        <span class="col-sm-2 p-1 text-dark"><a
                                                href="">{$PE.pedi_arquivo}</a></span>
                                        <span class="col-sm-2 p-1 text-dark">{$PE.pedi_prazo}</span>
                                        <span class="col-sm-2 p-1 text-dark">
                                            <a href="{$PEDIDO}/{$PE.pedi_id}/{$PE.pedi_tipo}">Detalhes</a>
                                        </span>
                                    </div>
                                    {/foreach}
                                    {/if}
                                    {else}
                                    {if $PDT == 0}
                                    <div class="col-sm-12 m-3 p-2">
                                        <span class="form-control"
                                            style="border: solid 1px; border-color: #fff; border-radius: 3px; padding: 7px; color: black; font-size: 16pt; min-width: 75%; background-color: transparent;">
                                            Voce esta sem Pedidos {$PDT}
                                        </span>
                                    </div>
                                    {else}
                                    <br>
                                    {foreach from=$PD item=P}
                                    <div class="col-sm-12 m-2 p-2 row puser"
                                        style="border-radius: 5px; background: rgba(255,255,255, 0.5);">
                                        <span class="col-sm-3 p-1 text-dark">{$P.pedi_tipo}</span>
                                        <span class="col-sm-2 p-1 text-dark"><a
                                                href="">{$P.pedi_descricao}</a></span>
                                        <span class="col-sm-2 p-1 text-dark"><a href="">{$P.pedi_arquivo}</a></span>
                                        <span class="col-sm-2 p-1 text-dark">{$P.pedi_prazo}</span>
                                        <span class="col-sm-2 p-1 text-dark">{$P.pedi_estado}</span>
                                        <span class="col-sm-1 p-1 text-dark">
                                            <a href="{$PEDIDO}/{$PE.pedi_id}/{$PE.pedi_tipo}">Detalhes</a>
                                        </span>
                                    </div>
                                    {/foreach}
                                    {/if}
                                    {/if} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modais">
    <div class="modal bd-example-modal-lg" id="userUpdateModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <br>
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document"
            style="align-content: center; margin: auto;">
            <div class="modal-content card">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalCenterTitle">Atualização de dados</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-group col-lg-12 text-white cli-cade" name="cada-cli" id="cada-cli"
                        method="post">
                        <input type="hidden" name="ruser_tipo" value="cliente">
                        <div class="form-group mt-3">
                            <label class="text-dark" for="">Email</label>
                            <input type="email" name="ruser_email" class="form-control m-2" placeholder="Endereço de e-mail" required="required" value="">
                        </div>
                        <div class="form-group mt-3">
                            <label class="text-dark" for="">Nome</label>
                            <input type="text" name="ruser_name" class="form-control m-2" placeholder="Nome Completo" value="">
                        </div>
                        <div class="form-group mt-3">
                            <label class="text-dark" for="">Telefone</label>
                            <input type="text" name="ruser_telefone" class="form-control m-2" placeholder="Telefone" value="">
                        </div>
                        <div class="col-lg-12 mt-3" name="user-mensagem" id="user-mensagem">
                        </div>
                        <div class="col-lg-12 mt-3 justify-content-center">
                            <button class="rounded-pill btn btn-success" type="submit" name="submeter" id="submeterUpdate"
                                class="form-control col-lg-5 text-center text-white bg-auxiliar">Atualizar</button>
                        </div>
                    </form>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection
