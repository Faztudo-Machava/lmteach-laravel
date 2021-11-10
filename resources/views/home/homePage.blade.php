@extends('index')
@section('css')

@endsection
@section('titulo')
    LMTEACHER
@endsection
@section('header')
    @include('header/header')
@endsection
@section('conteudo')
    <div class="pb-3 heroHome" style="background-image: url('{{ asset('img/Frame 15.svg') }}'); background-repeat: no-repeat; background-size: cover; background-position: center center">
        <div class="container text-white">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 col-lg-6 col-md-12">
                    <div class="mt-sm-0 mt-md-0 mt-lg-5 py-5 mx-xs-4 mx-sm-0 px-sm-0" data-aos="fade-up" data-aos-duration="400">
                        <h1 class="mb-4 heroTitle text-dark">Plataforma <br> de ajuda <br> academica</h1>
                        <div class="mb-4"></div>
                        <div class="row">
                            <span class="col-10">
                                <span class="col-sm-12 col-md-6 col-lg-6 me-3 divBtnPedido">
                                    <a href="#"
                                        class="btn btn-principle p-4 py-3 text-white rounded-pill h-float btn-pedido text-nowrap"
                                        data-bs-toggle="modal" data-bs-target="#pedidoModal">
                                        FAZER PEDIDO</a>
                                </span>
                                <span class="col-sm-12 col-md-6 col-lg-6">
                                    <a href="{{ route('pedidos') }}"
                                        class="btn btn-outline-dark p-4 py-3 btn-jobs rounded-pill h-float">TRABALHOS</a>
                                </span>
                            </span>
                            
                        </div>
                    </div>
                </div>
                <!-- Section One -->
                <div class="col-sm-12 col-lg-6 col-md-6 mx-auto divHeroImg">
                    <img class="img img-fluid d-block banner-img img-hero" src="{{ asset('img/gk.png') }}" alt="Mo">
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex bg-light py-3">
        <div class="container row mt-5 mx-auto text-dark">
            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                <div class="p-3 text-center">
                    <h3>Faça seu pedido</h3>
                    <p>Para fazer pedido, siga os passos a seguir.</p>
                </div>
                <div class="stepsImg">
                    <img class="img img-fluid" src="{{ asset('img/stepping.svg') }}" alt="steps">
                </div>
            </div>
            <div class="col-lg-6 shadow p-3" data-aos="fade-up" data-aos-duration="1000">
                <div class="p-2 row justify-content-center shadow-sm m-2" data-aos="fade-up" data-aos-duration="1300">
                    <div class="row justify-content-center align-items-center col-lg-2">
                        <p class="bg-principle text-white car-title row justify-content-center align-items-center rounded-pill">
                            1</p>
                    </div>
                    <div class="col-lg row justify-content-center text-xs-center text-sm-center text-md-center text-lg-start">
                        <p>Faça o pedido através do formulário em nosso site</p>
                    </div>
                </div>
                <div class="py-3 text-center" data-aos="fade-up" data-aos-duration="1600">
                    <i class="bi bi-arrow-down text-principle"></i>
                </div>
                <div class="p-2 row justify-content-center shadow-sm m-2 mt-3" data-aos="fade-up" data-aos-duration="1600">
                    <div class="row justify-content-center align-items-center align-items-center col-lg-2">
                        <p
                            class="bg-principle text-white car-title row justify-content-center align-items-center rounded-pill">
                            2</p>
                    </div>
                    <div class="col-lg row justify-content-center text-xs-center text-sm-center text-md-center text-lg-start">
                        <p>Pague 50% do custo do trabalho. Saiba mais sobre as formas de pagamento <a target="blank"
                            href="https://chat.whatsapp.com/FjPNNWGVuJOBGnJ9A78U6u">aqui</a></p>
                    </div>
                </div>
                <div class="py-3 text-center" data-aos="fade-up" data-aos-duration="1600">
                    <i class="bi bi-arrow-down text-principle"></i>
                </div>
                <div class="p-2 row justify-content-center shadow-sm m-2 mt-3" data-aos="fade-up" data-aos-duration="1600">
                    <div class="row justify-content-center align-items-center col-lg-2">
                        <p
                            class="bg-principle text-white car-title row justify-content-center align-items-center rounded-pill">
                            3</p>
                    </div>
                    <div class="row justify-content-center text-xs-center text-sm-center text-md-center text-lg-start col-lg">
                        <p>Aguarde algum tempo para que nossos especialistas concluam seu pedido</p>
                    </div>
                </div>
                <div class="py-3 text-center" data-aos="fade-up" data-aos-duration="1600">
                    <i class="bi bi-arrow-down text-principle"></i>
                </div>
                <div class="p-2 row justify-content-center shadow-sm m-2 mt-3" data-aos="fade-up" data-aos-duration="1600">
                    <div class="row justify-content-center align-items-center col-lg-2">
                        <p
                            class="bg-principle text-white car-title row justify-content-center align-items-center rounded-pill">
                            4</p>
                    </div>
                    <div class="col-lg row justify-content-center text-xs-center text-sm-center text-md-center text-lg-start">
                        <p>Antes de receber o trabalho, deverá pagar os 50% restantes do custo do pedido.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light">
        <div class="py-5 container">
            <div class="row justify-content-center">
                <div class="p-4">
                    <div class="my-5 text-center">
                        <h2 class="h2">Pedidos recentes</h2>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="">
                            @if ($numPedidos > 0)
                                <div class="
                            cards row">
                            <div class="d-none">{{ $delay = 50 }} {{ $i = 0 }}</div>
                            @foreach ($listaPedidos as $pedido)
                                @if ($i < 4)
                                    <div class="col-sm-12 col-md-6 col-lg-auto mb-3">
                                        <div class="card shadow border-none jobsCard px-1" data-aos="fade-right" data-aos-duration="1200"
                                            data-aos-delay="{{ $delay }}">
                                            <div class="card-body">
                                                <div class="mb-2">
                                                    <p class="text-muted pedidoAssunto">{{ $pedido->pedi_assunto }}
                                                    </p>
                                                    <h5 class="card-title">{{ $pedido->pedi_tipo }}</h5>
                                                </div>
                                                <div class="row justify-content-between">
                                                    <span class="col-sm">
                                                        <button class="btn btn-primary text-white btn-job-detalhes" data-bs-toggle="modal"
                                                            data-bs-target="#viewPedido{{ $pedido->pedi_id }}"><img src="{{asset('img/word-office-ms-file-doc-icon.svg')}}" alt="" class="img img-fluid img-job-card"></button>
                                                    </span>
                                                    <span
                                                        class="text-muted col-sm text-right">{{ $pedido->pedi_prazo }}</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none">{{ $delay = $delay + 100 }} {{ $i = $i + 1 }}</div>
                                    <div class="modal fade" id="viewPedido{{ $pedido->pedi_id }}" tabindex="-1"
                                        aria-labelledby="viewPedido{{ $pedido->pedi_id }}" aria-hidden="true">
                                        <br>
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content card bg-white border-none">
                                                <div class="modal-header bg-principle text-white">
                                                    <div>
                                                        <p class="text-white mb-1">{{ $pedido->pedi_assunto }}</p>
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
                                                            <span class="text-muted col-lg-6">Nível acadêmico </span>
                                                            <span class="col-lg-6">{{ $pedido->pedi_nivel }}</span>
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
    </div>
    <div class="modais">
        <div class="modal fade" id="pedidoModal" tabindex="-1" aria-labelledby="pedidoModal" aria-hidden="true">
            <br>
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content card bg-white border-none">
                    <div class="modal-header bg-principle text-white">
                        <h4 class="modal-titlefont-weight-bold" id="exampleModalCenterTitle">DEIXE
                            O SEU PEDIDO</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-dismissible fade show ml-4 me-4 espError d-none" role="alert"
                            id="pedidoMsg"></div>
                        <form class="card border-none p-2" id="formPedido">
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
                                    <select class="form-control selecao" name="pedi_instituicao" id="pedi_instituicao"
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
                                        class="form-control pl-3 inputs" placeholder="Disciplina (Ex: Informatica)"
                                        required>
                                </div>
                                <div class="col-lg-6 p-3">
                                    <div class="form-group">
                                        <input class="form-control" type="file" name="pedi_arquivo" id="pedi_arquivo"
                                            placeholder="Anexar arquivo" required>
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
                                        <textarea id="my-textarea" class="form-control"
                                            placeholder="Descricao do pedido (Oque deve ser feito no seu trabalho.)"
                                            name="pedi_descricao" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" id="submeter" class="btn btn-sm btn-principle rounded-pill px-3 py-2"> <span
                                        class="text-white">Submeter</span> <img class="img d-none load"
                                        src="{{ asset('img/ajax-loader.gif') }}" alt=""> </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cadMensagem" tabindex="-1" aria-labelledby="cadMensagem" aria-hidden="true">
        <br>
        <div class="modal-dialog modal-dialog-centered modal-lg mx-xs-3 mx-sm-3 mx-md-auto mx-lg-auto" role="document"
            style="align-content: center; margin: auto;">
            <div class="modal-content card border-none">
                <div class="modal-header @php
                    if (session('sucesso')) {
                        if(session('sucesso') == true){
                            echo 'bg-success';
                        } else {
                            echo 'bg-danger';
                        }
                    }
                @endphp text-white">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Mensagem</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row no-gutters align-items-center">
                        <div class="text-center col mr-2">
                            <div class="text-xl text-success text-uppercase mb-1">
                                <i class="bi bi-check2-circle fa-2x text-success"></i></div>
                            <div class="h5 mb-0 text-gray-800">{{ session('mensagem') }}</div>
                        </div>
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
    @if (session('mensagem'))
    <script>
        $(function() {
            $('#cadMensagem').modal('toggle');
        })
    </script>
    @endif
    <script src="{{ asset('site/js/user.js') }}"></script>
    <script src="{{ asset('site/js/contact.js') }}"></script>
@endsection
