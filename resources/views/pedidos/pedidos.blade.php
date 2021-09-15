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
    <div class="bg-light">
        <div class="py-5 container">
            <div class="row justify-content-center">
                <div class="p-4">
                    <div class="my-3 text-center">
                        <h2 class="h2">Alguns pedidos resolvidos</h2>
                    </div>
                    @if ($numPedidos > 0)
                        <div class="cards row">
                            <div class="d-none">{{ $delay = 300 }}</div>
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
                                                <span class="text-muted col-sm text-right">{{ $pedido->pedi_prazo }}</span>
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
                                                    <h4 class="h4 text-dark font-weight-bold mb-1">{{ $pedido->pedi_tipo }}
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
    <div class="bg-white py-4" id="servicos">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-7 text-center">
                    <h2 class="mb-3">Nossos Serviços</h2>
                </div>
            </div>
            <div class="row">
                <div class="p-2 col-lg-3"  data-aos="zoom-in" data-aos-duration="1200">
                    <div class="card p-4 h-transDown">
                        <div class="img text-center m-2 my-4">
                            <i class="fa fa-hat-cowboy text-principle fs-1"></i>
                        </div>
                        <div class="text-center h5 text-principle">Monografia</div>
                        <div class="description text-center text-dark">
                            <small>
                                <p>Preço do trabalho a partir de: 4000MZN</p>
                                <p>Prazo de conclusão a partir de : 15 dias</p>
                                <p>Verificação antiplagiativo</p>
                            </small>
                        </div>
                        <button class="btn btn-outline-principle rounded-pill h-float" data-bs-toggle="modal"
                        data-bs-target="#pedidoModal">Pedir</button>
                    </div>
                </div>
                <div class="p-2 col-lg-3" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="card p-4 h-transDown">
                        <div class="text-center m-2 my-4 img">
                            <i class="fa fa-hat-cowboy text-principle fs-1"></i>
                        </div>
                        <div class="text-center h5 text-principle">Trabalho de curso</div>
                        <div class="description text-center">
                            <small>
                                <p>Preço do trabalho a partir de: 2000MZN</p>
                                <p>Prazo de conclusão a partir de : 10 dias</p>
                                <p>Verificação antiplagiativo</p>
                            </small>
                        </div>
                        <button class="btn btn-outline-principle rounded-pill h-float" data-bs-toggle="modal"
                        data-bs-target="#pedidoModal">Pedir</button>
                    </div>
                </div>
                <div class="p-2 col-lg-3" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="card p-4 h-transDown">
                        <div class="img text-center m-2 my-4">
                            <i class="fa fa-hat-cowboy text-principle fs-1"></i>
                        </div>
                        <div class="text-center h5 text-principle">Teste</div>
                        <div class="description text-center">
                            <small>
                                <p>Preço do trabalho a partir de: 200MZN</p>
                                <p>Prazo de conclusão a partir de : 1 dia</p>
                                <p>Verificação antiplagiativo</p>
                            </small>
                        </div>
                        <button class="btn btn-outline-principle rounded-pill h-float" data-bs-toggle="modal"
                        data-bs-target="#pedidoModal">Pedir</button>
                    </div>
                </div>
                <div class="p-2 col-lg-3" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="card p-4 h-transDown">
                        <div class="img text-center m-2 my-4">
                            <i class="fa fa-hat-cowboy text-principle fs-1"></i>
                        </div>
                        <div class="text-center text-principle h5">Trabalho de Mestrado</div>
                        <div class="description text-center">
                            <small>
                                <p>Preço do trabalho a partir de: 5000MZN</p>
                                <p>Prazo de conclusão a partir de : 30 dias</p>
                                <p>Verificação antiplagiativo</p>
                            </small>
                        </div>
                        <button class="btn btn-outline-principle rounded-pill h-float" data-bs-toggle="modal"
                        data-bs-target="#pedidoModal">Pedir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white" id="contacto">
        <div class="container">
            <div class="row py-5" data-aos="fade-up" data-aos-duration="1200">
                <div class="col-lg-4">
                    <div class="info text-principle">
                        <div class="email row">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                        </div>
                        <div class="phone row">
                            <i class="bi bi-phone"></i>
                            <h4>Contacto:</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">
                    <div class="alert alert-success d-none" id="mailSuccess">Mensagem enviada com sucesso</div>
                    <div class="alert alert-danger d-none" id="mailFalha">Falha no envio da mensagem</div>
                    <form id="contactForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="mail_nome" class="form-control" id="nome" placeholder="Nome" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="mail_email" id="email" placeholder="Email"
                                    required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="mail_assunto" id="assunto" placeholder="Assunto"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="mail_mensagem" rows="5" placeholder="Mensagem"
                                required></textarea>
                        </div>
                        <div class="text-center form-group mt-3">
                            <button class="btn btn-principle text-white" type="submit">
                                <span
                                class="text-white">Enviar</span> <img class="img d-none load"
                                src="{{ asset('img/ajax-loader.gif') }}" alt=""></button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
    <div class="modais">
        <div class="modal fade" id="pedidoModal" tabindex="-1" aria-labelledby="pedidoModal" aria-hidden="true">
            <br>
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content card bg-white">
                    <div class="modal-header">
                        <h4 class="modal-titlefont-weight-bold" id="exampleModalCenterTitle">DEIXE
                            O SEU PEDIDO E LIGAREMOS DE VOLTA</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger alert-dismissible fade show ml-4 me-4 espError d-none" role="alert"
                            id="pedidoMsg"></div>
                        <form class="card p-2" id="formPedido">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 p-3">
                                    <select class="form-control pl-3" name="pedi_tipo" id="pedi_tipo" required>
                                        <option class="form-control" value="">Tipo de trabalho</option>
                                        <option class="form-control">Monografia</option>
                                        <option class="form-control">Trabalho de Curso</option>
                                        <option class="form-control">Trabalho de Mestrado</option>
                                        <option class="form-control">Teste</option>
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
                                    <select class="form-control pl-3 selecao" name="pedi_nivel" id="pedi_nivel" required>
                                        <option class="form-control" value="">Nível acadêmico</option>
                                        <option class="form-control">Médio</option>
                                        <option class="form-control">Técnico profissional</option>
                                        <option class="form-control">Superior</option>
                                    </select>
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
