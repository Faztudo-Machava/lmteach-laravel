@extends('layouts.userLayout')
@section('content')
    <div class=" py-5 container">
        <div class="row justify-content-center">
            <div class="p-4" id="conteudoPedidos">
                <div class="">
                    <h3 class=" h3">Trabalhos</h3>
                    <form action="" id="procurarPedido-form">
                        <div class="form-group">
                            <select id="tipo_pedido" class="form-control" name="estado_pedi" required>
                                <option value="3">Selecione o estado do trabalho</option>
                                <option value="1">Em resolução</option>
                                <option value="2">Resolvido</option>
                                <option value="3">Todos</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="dropdown-divider my-5"></div>
                @if ($numPedidos > 0)
                    <div id="pedidos" class="cards row">
                        <div class="d-none">{{ $delay = 50 }}</div>
                        @foreach ($listaPedidos as $pedido)
                            {{-- @php
                                $user = $pedido->find($pedido->pedi_cliente)->relUser;
                            @endphp --}}
                            <div class="col-sm-3 mb-3 {{ $pedido->pedi_status }} pedidos">
                                <div class="card" data-aos="fade-right" data-aos-duration="1200"
                                    data-aos-delay="{{ $delay }}">
                                    <div class="card-body">
                                        <div class="mb-2">
                                            <p class="text-muted">{{ $pedido->pedi_assunto }}</p>
                                            <h5 class="card-title">{{ $pedido->pedi_tipo }}</h5>
                                        </div>
                                        <div class="row justify-content-between">
                                            <span class="col-sm">
                                                <button class="btn btn-info text-white" data-bs-toggle="modal"
                                                    data-bs-target="#viewPedido{{ $pedido->pedi_id }}"><i
                                                        class="bi bi-info"></i></button>
                                            </span>
                                            <span class="text-muted col-sm text-right">{{ $pedido->pedi_prazo }}</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="d-none">{{ $delay = $delay + 50 }}</div>
                            <div class="modal fade" id="viewPedido{{ $pedido->pedi_id }}" tabindex="-1"
                                aria-labelledby="viewPedido{{ $pedido->pedi_id }}" aria-hidden="true">
                                <br>
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content card bg-white">
                                        <div class="modal-header">
                                            <div>
                                                <p class="text-muted mb-1">{{ $pedido->pedi_assunto }}</p>
                                                <h4 class="h4 text-dark font-weight-bold mb-1">
                                                    {{ $pedido->pedi_tipo }}</h4>
                                            </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-lg-6 row">
                                                <div class="row mb-3">
                                                    <span class="text-muted col-lg-6">Numero pedido </span>
                                                    <span class="col-lg-6">{{ $pedido->pedi_id }}</span>
                                                </div>
                                                <div class="row mb-3">
                                                    <span class="text-muted col-lg-6">Tipo </span>
                                                    <span class="col-lg-6">{{ $pedido->pedi_tipo }}</span>
                                                </div>
                                                <div class="row mb-3">
                                                    <span class="text-muted col-lg-6">Assunto </span>
                                                    <span class="col-lg-6">{{ $pedido->pedi_assunto }}</span>
                                                </div>
                                                <div class="row mb-3">
                                                    <span class="text-muted col-lg-6">Estado </span>
                                                    <span class="col-lg-6">
                                                        @if ($pedido->pedi_status == 2)
                                                            {{ 'Resolvido' }}
                                                        @elseif($pedido->pedi_status == 1)
                                                            {{ 'No processo de resolução' }}
                                                        @else
                                                            {{ 'Pendente' }}
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <h4>Descrição</h4>
                                                </div>
                                                <div>
                                                    {{ $pedido->pedi_descricao }}
                                                </div>
                                                @if (session('user')->user_tipo === 'especialista' && $pedido->pedi_status == 0)
                                                    <div class="my-5">
                                                        <p>Pretende resolver o trabalho? <a
                                                                href="/resolver/{{ $pedido->pedi_id }}">clique aqui</a>
                                                        </p>
                                                    </div>
                                                @endif
                                                @if ((session('user')->user_tipo === 'especialista' && $pedido->pedi_status == 1) || (session('user')->user_tipo === 'admin' && $pedido->pedi_status == 1))
                                                    <div class="my-5"><a class="btn btn-danger"
                                                            href="/cancelarTrabalho/{{ $pedido->pedi_id }}">Cancelar
                                                            subscrição</a>
                                                    </div>
                                                @endif
                                                @if (session('user')->user_tipo === 'admin' && $pedido->pedi_status === 1)
                                                    <div class="my-5">
                                                        <form id="formTrabResolvido">
                                                            @csrf
                                                            <div id="errorEnvioResolucao" class="alert alert-danger d-none">
                                                                Houve algum problema no momento de submissão do trabalho
                                                            </div>
                                                            <div id="sucessoEnvioRsolucao"
                                                                class="alert alert-success d-none">Trabalho submetido com
                                                                sucesso</div>
                                                            <div class="form-group my-2">
                                                                <label for="my-select fs-2">Anexar a resolução</label>
                                                                <input type="file" name="fileTrabResolvido" id="anexo"
                                                                    class="form-control" required>
                                                                <input type="hidden" name="pedido_id"
                                                                    value="{{ $pedido->pedi_id }}">
                                                                <input type="hidden" name="pedido_cliente"
                                                                    value="{{ $pedido->pedi_cliente }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <button class="btn btn-principle text-white"
                                                                    type="submit">Enviar <img class="img d-none load"
                                                                        src="{{ asset('img/ajax-loader.gif') }}"
                                                                        alt=""></button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        @if (session('user')->user_tipo === 'especialista' || session('user')->user_tipo === 'admin')
                                            <div class="dropdown-divider"></div>
                                            <div class="my-4">
                                                <div class="text-center">
                                                    <p>Analise o trabalho antes de resolver</p>
                                                    <a href="/arquivoPedido/{{ $pedido->pedi_id }}"
                                                        class="btn btn-principle text-white rounded-pill px-3 py-2"><span
                                                            class="me-2">Baixar</span><i
                                                            class="bi bi-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        @endif
                                        @if (session('user')->user_tipo === 'cliente' && $pedido->pedi_status == 2)
                                            <div class="my-4">
                                                <div class="text-center">
                                                    <p>Encontre abaixo a resolucão do trabalho</p>
                                                    <a href="/arquivoResolvido/{{ $pedido->pedi_id }}"
                                                        class="btn btn-principle text-white rounded-pill px-3 py-2"><span
                                                            class="me-2">Baixar</span><i
                                                            class="bi bi-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="alert alert-info">
                        Sem trabalhos no momento.
                    </div>
                @endif
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="text-center col mr-2">
                                <div class="text-xs font-weight-bold text-principle text-uppercase mb-1">
                                    Pedidos</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $numPedidos }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-collection-fill fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="text-center col mr-2">
                                <div class="text-xs font-weight-bold text-principle text-uppercase mb-1">
                                    Pedidos em resolução</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $numPedidosEm }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-collection-fill fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="text-center col mr-2">
                                <div class="text-xs font-weight-bold text-principle text-uppercase mb-1">
                                    Pedidos resolvidos</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $numPedidosResolvido }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-collection-fill fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
