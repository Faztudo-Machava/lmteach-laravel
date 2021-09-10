@extends('index')
@section('conteudo')
    <div class="d-flex" id="wrapper">
        {{-- Side bar starts here --}}
        <div class="bg-principle" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 px-3 text-white fw-bold text-uppercase">
                <i class="fas fa-user-secret me-2"></i> LMTEACH
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="{{ route('usuario') }}"
                    class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i class="fas fa-user me-2"></i> Perfil
                </a>
                @if (session('user')->user_tipo != 'especialista')
                <a href="{{ route('usuarioPedidos') }}"
                    class="list-group-item list-group-item-action bg-transparent text-white">
                    <i class="fas fa-project-diagram me-2"></i> Pedidos
                </a>
                @else
                <a href="{{ route('usuarioPedidos') }}"
                    class="list-group-item list-group-item-action bg-transparent text-white">
                    <i class="fas fa-project-diagram me-2"></i> Trabalhos
                </a>
                @endif
            </div>

        </div>
        {{-- Side bar end here --}}

        {{-- Page content starts here --}}
        <div id="page-content-wrapper" class="bg-cinza">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-2 px-4 shadow-sm">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left text-principle me-3 fs-3" id="menu-toggle"></i>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="" class="nav-link"><i class=" bi bi-bell-fill "></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navdropdown" role="button"
                                data-toggle="dropdown">
                                <span class="">
                                    <img src="{{asset('img/avatar.png')}}" class="img-fluid rounded-pill img-user" alt="">
                                </span>
                            
                            </a>
                            <div class="drop-menu bg-white rounded border-1 border-principle" aria-labelledby="navdropdown">
                                <a href="{{route('logout')}}" class="dropdown-item nav-link mb-2"><i class="bi bi-box-arrow-in-left"></i> <small>Logout</small></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="">
                <div class=" container-fluid px-4">
                @yield('content')
            </div>
        </div>
    </div>
    {{-- Page content end here --}}
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
                                        <input class="arquivo" type="file" name="pedi_arquivo" id="pedi_arquivo"
                                            required style="display: none;">
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
                                <button type="submit" id="submeter" class="btn btn-sm btn-principle"> <span
                                        class="text-white">Submeter</span> <img class="img d-none load"
                                        src="{{ asset('img/ajax-loader.gif') }}" alt=""> </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="userUpdateModal" tabindex="-1" aria-labelledby="pedidoModal" aria-hidden="true">
            <br>
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document"
                style="align-content: center; margin: auto;">
                <div class="modal-content card">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" id="exampleModalCenterTitle">Atualização de dados</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-group col-lg-12 text-white cli-cade" name="cada-cli" id="cada-cli" method="post">
                            <input type="hidden" name="ruser_tipo" value="cliente">
                            <div class="form-group mt-3">
                                <label class="text-dark" for="">Email</label>
                                <input type="email" name="ruser_email" class="form-control m-2"
                                    placeholder="Endereço de e-mail" required="required" value="">
                            </div>
                            <div class="form-group mt-3">
                                <label class="text-dark" for="">Nome</label>
                                <input type="text" name="ruser_name" class="form-control m-2" placeholder="Nome Completo"
                                    value="">
                            </div>
                            <div class="form-group mt-3">
                                <label class="text-dark" for="">Telefone</label>
                                <input type="text" name="ruser_telefone" class="form-control m-2" placeholder="Telefone"
                                    value="">
                            </div>
                            <div class="col-lg-12 mt-3" name="user-mensagem" id="user-mensagem">
                            </div>
                            <div class="col-lg-12 mt-3 justify-content-center">
                                <button class="btn btn-success" type="submit" name="submeter"
                                    id="submeterUpdate">Atualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session('user')->user_tipo != 'especialista')
    <button class="btn btn-principle d-flex align-items-center justify-content-center" id="addPedido" data-bs-toggle="modal"
    data-bs-target="#pedidoModal"><i class="bi bi-plus text-white fs-2"></i></button>
    @endif

@endsection
@section('js')
    <script>
        var el = document.getElementById("wrapper")
        var toggleButton = document.getElementById("menu-toggle")

        toggleButton.onclick = function() {
            el.classList.toggle("toggled")
        }
    </script>
@endsection
