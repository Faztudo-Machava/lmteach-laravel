@extends('layouts.userLayout')
@section('content')
    <div class="py-5 container">
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
        <div class="row justify-content-center">
            <div class="p-4" id="conteudoPedidos">
                <div class="">
                    @if (session('user')->user_tipo == 'especialista' || session('user')->user_tipo == 'admin')
                        <h3 class=" h3">Trabalhos</h3>
                    @else
                        <h3 class=" h3">Pedidos</h3>
                    @endif
                    <form action="" id="procurarPedido-form">
                        <div class="form-group">
                            <select id="tipo_pedido" class="form-control" name="estado_pedi" required>
                                @if (session('user')->user_tipo == 'especialista' || session('user')->user_tipo == 'admin')
                                    <option value="3">Selecione o estado do trabalho</option>
                                @else
                                    <option value="">Selecione o estado do pedido</option>
                                @endif
                                <option value="1">Em resolução</option>
                                <option value="2">Pendente</option>
                                <option value="0">Resolvido</option>
                                <option value="3">Todos</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="dropdown-divider my-5"></div>
                @if ($numPedidos > 0)
                    <div id="pedidos" class="cards row d-flex justify-content-center">
                        <div class="d-none">{{ $delay = 50 }}</div>
                        @foreach ($listaPedidos as $pedido)
                            {{-- @php
                                $user = $pedido->find($pedido->pedi_cliente)->relUser;
                            @endphp --}}
                            <div class="col-sm-12 col-md-6 col-lg-auto mb-3 {{ $pedido->pedi_status }} pedidos">
                                <div class="card shadow border-none jobsCard px-1" data-aos="fade-right">
                                    <div class="card-body">
                                        <div class="mb-2">
                                            <p class="text-muted pedidoAssunto text-center">
                                                {{ $pedido->pedi_assunto }}
                                            </p>
                                            <h5 class="card-title text-center">{{ $pedido->pedi_tipo }}
                                            </h5>
                                        </div>
                                        <div class="row justify-content-between">
                                            <span class="d-flex justify-content-center my-3 job-card-span"
                                                data-bs-toggle="modal" data-bs-target="#viewPedido{{ $pedido->pedi_id }}">
                                                <img src="{{ asset('img/Group 7.svg') }}" alt=""
                                                    class="img img-fluid img-job-card">
                                            </span>
                                            <span class="text-muted text-center">{{ $pedido->pedi_prazo }}</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="viewPedido{{ $pedido->pedi_id }}" tabindex="-1"
                                aria-labelledby="viewPedido{{ $pedido->pedi_id }}" aria-hidden="true">
                                <br>
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content card bg-white border-none">
                                        <div class="modal-header bg-principle text-white">
                                            <div>
                                                <p class="text-white mb-1">{{ $pedido->pedi_assunto }}
                                                </p>
                                                <h4 class="h4 text-white font-weight-bold mb-1">
                                                    {{ $pedido->pedi_tipo }}
                                                </h4>
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
                                                    <span class="text-muted col-lg-6">Nível acadêmico
                                                    </span>
                                                    <span class="col-lg-6">{{ $pedido->pedi_nivel }}</span>
                                                </div>
                                                <div class="row mb-3">
                                                    <span class="text-muted col-lg-6">Assunto </span>
                                                    <span class="col-lg-6">{{ $pedido->pedi_assunto }}</span>
                                                </div>
                                                <div class="row mb-3">
                                                    <span class="text-muted col-lg-6">Estado </span>
                                                    <span
                                                        class="col-lg-6">{{ $pedido->pedi_status == 1 ? 'Pendente' : 'Resolvido' }}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <h4>Descrição</h4>
                                                </div>
                                                <div>
                                                    {{ $pedido->pedi_descricao }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="alert alert-info">
                        Sem pedidos efectuados até o momento.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
