@extends('index')
@section('css')

@endsection
@section('titulo')
    LMTEACH
@endsection
@section('header')
    @include('header/header')
@endsection
@section('conteudo')
<div class="divPedidos">
    <div class="py-5 container">
        <div class="row justify-content-center">
            <div class="p-4">
                <div class="my-5 text-center">
                    <h2 class="h2">Pedidos recentes</h2>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="">
                        @if ($numPedidos > 0)
                            <div class="cards row d-flex justify-content-center">
                        <div class="d-none">{{ $delay = 50 }} {{ $i = 0 }}</div>
                        @foreach ($listaPedidos as $pedido)
                            @if ($i < 8)
                            <div class="col-sm-12 col-md-6 col-lg-auto mb-3">
                                <div class="card border-none jobsCard px-1" data-aos="fade-right">
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
                                                data-bs-toggle="modal"
                                                data-bs-target="#viewPedido{{ $pedido->pedi_id }}">
                                                <img src="{{ asset('img/Group 7.svg') }}" alt=""
                                                    class="img img-fluid img-job-card">
                                            </span>
                                            <span
                                                class="text-muted text-center">{{ $pedido->pedi_prazo }}</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="d-none">{{ $delay = $delay + 100 }} {{ $i = $i + 1 }}
                            </div>
                            <div class="modal fade" id="viewPedido{{ $pedido->pedi_id }}"
                                tabindex="-1" aria-labelledby="viewPedido{{ $pedido->pedi_id }}"
                                aria-hidden="true">
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
                                            <button type="button" class="btn-close"
                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-lg-6 row">
                                                <div class="row mb-3">
                                                    <span class="text-muted col-lg-6">Numero pedido </span>
                                                    <span
                                                        class="col-lg-6">{{ $pedido->pedi_id }}</span>
                                                </div>
                                                <div class="row mb-3">
                                                    <span class="text-muted col-lg-6">Tipo </span>
                                                    <span
                                                        class="col-lg-6">{{ $pedido->pedi_tipo }}</span>
                                                </div>
                                                <div class="row mb-3">
                                                    <span class="text-muted col-lg-6">Nível acadêmico
                                                    </span>
                                                    <span
                                                        class="col-lg-6">{{ $pedido->pedi_nivel }}</span>
                                                </div>
                                                <div class="row mb-3">
                                                    <span class="text-muted col-lg-6">Assunto </span>
                                                    <span
                                                        class="col-lg-6">{{ $pedido->pedi_assunto }}</span>
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
                            @endif
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
</div>
    <div class="modais">
        <div class="modal fade" id="pedidoModal" tabindex="-1" aria-labelledby="pedidoModal" aria-hidden="true">
            <br>
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content card bg-white">
                    <div class="modal-header bg-principle text-white">
                        <h4 class="modal-titlefont-weight-bold" id="exampleModalCenterTitle">DEIXE
                            O SEU PEDIDO</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger alert-dismissible fade show ml-4 me-4 espError d-none" role="alert"
                            id="pedidoMsg"></div>
                        <form class="card p-2" id="formPedido">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 p-3">
                                    <select class="form-control pl-3 selecao" name="pedi_nivel" id="pedi_nivel" required>
                                        <option class="form-control" value="">Nível acadêmico</option>
                                        <option class="form-control">Médio</option>
                                        <option class="form-control">Técnico profissional</option>
                                        <option class="form-control">Superior</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 p-3">
                                    <select class="form-control pl-3" name="pedi_tipo" id="pedi_tipo" required>
                                        <option class="form-control" value="">Tipo de trabalho</option>
                                        <option id="monografia" class="form-control">Monografia</option>
                                        <option id="trabCurso" class="form-control">Trabalho de Curso</option>
                                        <option id="trabMestrado" class="form-control">Trabalho de Mestrado</option>
                                        <option id="teste" class="form-control">Teste</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 p-3">
                                    <select class="form-control m-2 selecao" name="pedi_instituicao" id="pedi_instituicao"
                                        required="required">
                                        <option class="form-control" value="">Instituição educacional</option>
                                        @foreach ($listaInstituicao as $instituicao)
                                            <option class="form-control" value="{{ $instituicao->inst_id }}">
                                                {{ $instituicao->inst_nome }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-6 p-3">
                                    <input type="date" name="pedi_prazo" id="pedi_prazo" class="form-control pl-3"
                                        placeholder="Prazo" required>
                                </div>
                                <div class="col-lg-6 p-3">
                                    <input type="text" name="pedi_assunto" id="pedi_assunto"
                                        class="form-control pl-3 inputs" placeholder="Assunto(Ex: Informatica)" required>
                                </div>
                                <div class="col-lg-6 p-3">
                                    <div class="text-center">
                                        <label for="pedi_arquivo">
                                            <i class="bi bi-file-earmark-pdf"></i> Anexar Arquivo
                                        </label>
                                        <input class="arquivo" type="file" name="pedi_arquivo" id="pedi_arquivo" required style="display: none;">
                                    </div>
                                </div>
                                @if (session('user'))
                                    <div class="col-lg-12 p-3">
                                        <input type="email" name="user_email" id="user_email"
                                            class="form-control pl-3 inputs" placeholder="Seu email"
                                            value="{{ session('user')->email }}">
                                    </div>
                                @else
                                    <div class="col-lg-12 p-3">
                                        <input type="email" name="user_email" id="user_email"
                                            class="form-control pl-3 inputs" placeholder="Seu email">
                                    </div>
                                @endif
                                <div class="col-lg-12 p-3">
                                    <div class="form-group">
                                        <textarea id="my-textarea" class="form-control" placeholder="Descricao do pedido (Oque deve ser feito no seu trabalho.)" name="pedi_descricao" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" id="submeter" class="btn btn-sm btn-principle"> <span class="text-white">Submeter</span> <img class="img d-none load" src="{{asset('img/ajax-loader.gif')}}" alt=""> </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('footer/footer')
@endsection
@section('js')
    <script src="{{ asset('site/js/user.js') }}"></script>
@endsection
