@extends('index')
@section('conteudo')
    <div class="d-flex" id="wrapper">
        {{-- Side bar starts here --}}
        <div class="bg-principle position-fixed" id="sidebar-wrapper">
            <div class="sidebar-heading pt-4 text-white text-uppercase">
                <a href="{{ route('home') }}"
                    class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i class="fas fa-home me-2"></i> LMTEACHER
                </a>
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="{{ route('usuario') }}"
                    class="list-group-item list-group-item-action bg-transparent second-text text-white">
                    <i class="fas fa-user me-2"></i> Perfil
                </a>
                @if (session('user')->user_tipo === 'cliente')
                    <a href="{{ route('usuarioPedidos') }}"
                        class="list-group-item list-group-item-action bg-transparent text-white">
                        <i class="bi bi-collection-fill me-2"></i>Meus Pedidos
                    </a>
                @elseif (session('user')->user_tipo === 'especialista')
                    <a href="{{ route('usuarioPedidos') }}"
                        class="list-group-item list-group-item-action bg-transparent text-white">
                        <i class="bi bi-collection-fill me-2"></i> Trabalhos
                    </a>
                    <a href="{{ route('especialistaPedidos') }}"
                        class="list-group-item list-group-item-action bg-transparent text-white">
                        <i class="bi bi-collection-fill me-2"></i>Meus Trabalhos
                    </a>
                    <a href="{{ route('ContactUs') }}"
                        class="list-group-item list-group-item-action bg-transparent text-white">
                        <i class="bi bi-envelope-fill me-2"></i>Resolver pedido
                    </a>
                @else
                    <a href="{{ route('usuarioPedidos') }}"
                        class="list-group-item list-group-item-action bg-transparent text-white">
                        <i class="bi bi-collection-fill me-2"></i> Trabalhos
                    </a>
                @endif
                <a href="{{ route('logout') }}" class="list-group-item list-group-item-action bg-transparent text-white bottom-0 position-fixed">
                    <i class="bi bi-box-arrow-in-left"></i> <small>Sair</small>
                </a>
            </div>

        </div>
        {{-- Side bar end here --}}

        {{-- Page content starts here --}}
        <div id="page-content-wrapper" class="bg-cinza">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-2 px-4 shadow-sm">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left text-principle me-3 fs-3" id="menu-toggle"></i>
                </div>
                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}
                {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                </div> --}}

                <ul class="ms-auto mb-2 d-flex flex-nowrap">
                    <li class="nav-item">
                        <a href="#" class="nav-link img-perfil" role="button">
                            <span
                                class="">
                                @if (session('user')->user_tipo == 'admin')
                                        <img src="
                                {{ asset('img/avatar.svg') }}" class="img-fluid rounded-pill img-user" alt="">
                            @else
                                @if (session('user')->user_img)
                                    <img src="{{ asset('storage/' . session('user')->user_img) }}"
                                        class="img-fluid rounded-pill img-user" alt="">
                                @else
                                    <img src="{{ asset('img/avatar.svg') }}" class="img-fluid rounded-pill img-user"
                                        alt="">
                                @endif
                                @endif
                            </span>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="{{ route('logout') }}" role="button" class="nav-link text-center text-principle"><i class="fas fa-arrow-circle-left fs-5 mt-1"></i>
                        </a>
                    </li> --}}
                </ul>
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
                <div class="modal-content card bg-white border-none">
                    <div class="modal-header bg-principle text-white">
                        <h4 class="modal-titlefont-weight-bold" id="exampleModalCenterTitle">DEIXE
                            O SEU PEDIDO</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-dismissible fade show ml-4 me-4 espError d-none" role="alert"
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
                                    <select class="form-control pl-3 selecao" name="pedi_nivel" id="pedi_nivel" required>
                                        <option class="form-control" value="">Nível acadêmico</option>
                                        <option class="form-control">Médio</option>
                                        <option class="form-control">Técnico profissional</option>
                                        <option class="form-control">Superior</option>
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
                                    <div class="text-center">
                                        <input class="form-control" type="file" name="pedi_arquivo" id="pedi_arquivo"
                                            required>
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
                                <button type="submit" id="submeter" class="btn btn-sm btn-principle px-3 py-2 rounded-pill text-white"> <span>Submeter</span> <img class="img d-none load"
                                        src="{{ asset('img/ajax-loader.gif') }}" alt=""> </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="userUpdateModal" tabindex="-1" aria-labelledby="pedidoModal" aria-hidden="true">
            <br>
            <div class="modal-dialog modal-dialog-centered modal-lg mx-xs-3 mx-sm-3 mx-md-auto mx-lg-auto" role="document"
                style="align-content: center; margin: auto;">
                <div class="modal-content card">
                    <div class="modal-header bg-principle text-white">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Atualização de dados</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-danger d-none mx-4" id="updateUserFail"></div>
                    <div class="alert alert-success d-none mx-4" id="updateUserDone"></div>
                    <div class="modal-body">
                        <form id="atualizarUser">
                            @csrf
                            <input type="hidden" name="usuario_id" value="{{ session('user')->user_id }}">
                            <input type="hidden" name="usuario_tipo" value="{{ session('user')->user_tipo }}">
                            <div class="form-group mt-3">
                                <label class="text-dark" for="">Nome</label>
                                <input type="text" name="ruser_name" class="form-control m-2" placeholder="Nome Completo"
                                    value="{{ session('user')->user_nome }}">
                            </div>
                            @if (session('user')->user_telefone)
                                <div class="form-group mt-3">
                                    <label class="text-dark" for="">Telefone</label>
                                    <input type="text" name="ruser_telefone" class="form-control m-2" placeholder="Telefone"
                                        value="{{ session('user')->user_telefone }}" required>
                                </div>
                            @endif
                            <div class="col-lg-12 mt-3" name="user-mensagem" id="user-mensagem">
                            </div>
                            <div class="col-lg-12 mt-3 justify-content-center">
                                <button class="btn btn-success px-3 py-2 rounded-pill text-white" type="submit" name="submeter">
                                    <span>Atualizar</span> <img class="img d-none load"
                                        src="{{ asset('img/ajax-loader.gif') }}" alt=""></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="userImgUpdateModal" tabindex="-1" aria-labelledby="userImgUpdateModal" aria-hidden="true">
            <br>
            <div class="modal-dialog modal-dialog-centered modal-lg mx-xs-3 mx-sm-3 mx-md-auto mx-lg-auto" role="document"
                style="align-content: center; margin: auto;">
                <div class="modal-content card">
                    <div class="modal-header bg-principle text-white">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Atualização da imagem do perfil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-danger d-none mx-4" id="updateUserImgFail"></div>
                    <div class="alert alert-success d-none mx-4" id="updateUserImgDone"></div>
                    <div class="modal-body">
                        <form id="updatImgUser">
                            @csrf
                            <div class="form-group mt-3">
                                <label for="update_img" class="text-dark">Imagem de perfil</label>
                                <input class="form-control m-2" type="file" name="update_img" id="update_img" required>
                                <div class="img-holder-esp mx-auto mb-2" name>
                                </div>
                                <p class="errorFileType-esp d-none alert-danger">Ficheiro invalido</p>
                            </div>
                            <div class="col-lg-12 mt-3" name="user-mensagem" id="user-mensagem">
                            </div>
                            <div class="col-lg-12 mt-3 justify-content-center">
                                <button class="btn btn-success px-3 py-2 rounded-pill text-white" type="submit" name="submeter">
                                    <span>Atualizar</span> <img class="img d-none load"
                                        src="{{ asset('img/ajax-loader.gif') }}" alt=""></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session('user')->user_tipo == 'cliente')
        <button class="btn btn-principle px-3 py-2 rounded-pill text-white" id="addPedido" data-bs-toggle="modal"
            data-bs-target="#pedidoModal">Fazer pedido</button>
    @endif
@endsection
@section('js')
    <script>
        $(function() {
            $('#atualizarUser').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    url: "/updateUser",
                    method: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    enctype: "multipart/form-data",
                    beforeSend: function() {
                        $('.load').removeClass('d-none')
                    },
                    complete: function() {
                        $('.load').addClass('d-none')
                    },
                    success: function(response) {
                        if (response.success === true) {
                            $('#updateUserDone').removeClass('d-none').html(response.mensagem)
                        } else {
                            $('#updateUserFail').removeClass('d-none').html(response.mensagem)
                        }
                        console.log(response)
                    }
                })
            })

            $('#updatImgUser').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    url: "/updateImg",
                    method: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    enctype: "multipart/form-data",
                    beforeSend: function() {
                        $('.load').removeClass('d-none')
                    },
                    complete: function() {
                        $('.load').addClass('d-none')
                    },
                    success: function(response) {
                        if (response.success === true) {
                            $('#updateUserImgDone').removeClass('d-none').html(response.mensagem)
                        } else {
                            $('#updateUserImgFail').removeClass('d-none').html(response.mensagem)
                        }
                        console.log(response)
                    }
                })
            })

            $('input[type="file"][name="update_img"]').val('');
            $('input[type="file"][name="update_img"]').change(function() {
                var img_path = $(this)[0].value
                console.log($('input[type="file"][name="update_img"]'))
                var img_holder = $('.img-holder-esp')
                var extension = img_path.substring(img_path.lastIndexOf('.') + 1).toLowerCase()
                if (extension == 'jpeg' || extension == 'jpg' || extension == 'png') {
                    if (typeof(FileReader) != 'undefined') {
                        img_holder.empty()
                        var reader = new FileReader()
                        reader.onload = function(e) {
                            $('<img/>', {
                                'src': e.target.result,
                                'class': 'img-fluid align-self-center',
                                'style': 'max-width:150px; margin-bottom: 10px;'
                            }).appendTo(img_holder);
                        }
                        img_holder.show()
                        reader.readAsDataURL($(this)[0].files[0])
                    } else {
                        $(img_holder).html('Tipo de ficheiro invalido')
                    }
                } else {
                    $('.errorFileType-esp').removeClass('d-none')
                    $(img_holder).empty()
                }
            })
        })
        var el = document.getElementById("wrapper")
        var toggleButton = document.getElementById("menu-toggle")

        toggleButton.onclick = function() {
            el.classList.toggle("toggled")
            var marginleft = $('#page-content-wrapper').css('margin-left')
            if(marginleft == '240px'){
                $('#page-content-wrapper').css('margin-left', '0px')
            } else{
                $('#page-content-wrapper').css('margin-left', '15rem')
            }
        }

        $('#updateImgModel').click(function(){
           $('#userImgUpdateModal').modal('toggle');
        })
    </script>
@endsection
