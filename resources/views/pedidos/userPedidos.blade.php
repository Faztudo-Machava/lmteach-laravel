@extends('layouts.userLayout')
@section('content')
<div class="">
    <div class="py-5 container">
        <div class="row justify-content-center">
            <div class="p-4">
                <div class="my-3 text-center">
                    <h2 class="h2">Alguns pedidos resolvidos</h2>
                </div>
                @if ($numPedidos > 0)
                    <div class="cards row">
                        <div class="d-none">{{ $delay = 100 }}</div>
                        @foreach ($listaPedidos as $pedido)
                            <div class="col-sm-3 mb-3">
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
                                            <span
                                                class="text-muted col-sm text-right">{{ $pedido->pedi_prazo }}</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="d-none">{{ $delay = $delay + 100 }}</div>
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
                                        <div class="dropdown-divider"></div>
                                        <div class="my-4">
                                            <div class="text-center">
                                                <p>Faça já o seu pedido</p>
                                                <button class="btn btn-principle text-white rounded-pill px-3 py-2"
                                                    data-bs-toggle="modal" data-bs-target="#pedidoModal">
                                                    <span>FAZER PEDIDO </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="alert alert-info">
                        Sem pedidos resolvidos até o momento.
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
