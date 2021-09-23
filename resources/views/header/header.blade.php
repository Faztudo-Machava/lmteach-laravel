<!-- ======= Header ======= -->
<header class="header">
    <div class="" id=" page-conteudo">
        <nav class="navbar navbar-expand-lg navbar-light py-2 px-4 shadow-sm bg-light">

            <div class="d-flex align-items-center">
                <a class="navbar-brand font-weight-bold" href="{{ url('/') }}">LMTEACHER</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHomeContent"
                aria-controls="navbarHomeContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarHomeContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#servicos">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Sobre</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="">Ajuda</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navdropdown" role="button"
                            data-toggle="dropdown">Usuario</a>
                        <div class="drop-menu bg-white rounded border-1 border-principle" aria-labelledby="navdropdown">
                            <button class="dropdown-item nav-link drop-item mt-2" data-bs-toggle="modal"
                                data-bs-target="#login"><i class="bi bi-box-arrow-in-right"></i> <small>
                                    Entrar</small></button>
                            <div class="dropdown-divider"></div>
                            <button class="dropdown-item nav-link mb-2" data-bs-toggle="modal"
                                data-bs-target="#cadUsers"><i class="bi bi-person-plus"></i>
                                <small>Registrar-se</small></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header><!-- Fim Header -->


<!-- =============Formulario de login================= -->
<form class="form" id="formLogin">
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
        @csrf
        <div class="modal-dialog modal-dialog-centered login-modal">
            <div class="modal-content login">
                <div class="row modal-body p-0 bg-principle">
                    <div class="col-lg p-4 pr-2 bg-white rounded">
                        <div class="">
                            <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="d-flex justify-content-center">
                            <i class="bi bi-person-circle fs-1 text-principle"></i>
                        </div>
                        <div class="my-4 d-flex flex-column justify-content-center p-4">
                            <div class="alert alert-danger fade show ml-4 me-4 d-none" role="alert" id="logError"
                                data-aos="fade-right" data-aos-duration="1200"></div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="log_email" name="log_email"
                                    placeholder="nome@example.com" required>
                                <label for="log_email"> <i class="bi bi-person-fill"></i> <small>Email</small> </label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="log_senha" name="log_senha"
                                    placeholder="Senha" required>
                                <label for="log_senha"><i class="bi bi-lock-fill"></i><small>Senha</small></label>
                            </div>
                            <div class="mb-3">
                                <div class="nav-item">
                                    <a class="btn btn-link" href="{{ route('emailReset') }}">
                                        {{ __('Esqueceu a senha?') }}
                                    </a>
                                </div>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                                <label class="form-check-label" for="rememberPasswordCheck">
                                    Lembrar da senha.
                                </label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-principle text-uppercase fw-bold rounded-pill text-white"
                                    type="submit"><span class="text-white">Entrar</span> <img
                                        class="img d-none load" src="{{ asset('img/ajax-loader.gif') }}"
                                        alt=""></button>
                            </div>
                            <hr class="my-4">
                            <div class="row d-flex justify-content-center">
                                <button class="btn btn-login text-uppercase fw-bold" type="submit"> <i
                                        class="fab fa-google me-2"></i>
                                </button>
                                <button class="btn btn-login text-uppercase fw-bold" type="submit"> <i
                                        class="fab fa-facebook-f me-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg">
                        <div class="p-3 modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="d-flex flex-column justify-content-center p-4">
                            <div class="p-3 text-white">
                                <h3>Entrar</h3>
                                <p>Quer saber quais são os procedimentos para fazer o seu pedido? é muitos simples é só
                                    seguir os passos e já está.</p>
                            </div>
                            <div>
                                <img class="img img-fluid" src="{{ asset('img/login.svg') }}" alt="steps">
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</form>

<!-- =============Formulario de criação de user================= -->
<div class="modal fade" id="cadUsers" tabindex="-1" aria-labelledby="addUser" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered login-modal">
        <div class="modal-content">
            <div class="p-2">
                <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="p-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="cliente-tab" data-bs-toggle="tab" data-bs-target="#cliente"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Cliente</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="especialista-tab" data-bs-toggle="tab"
                            data-bs-target="#especialista" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">Especialista</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="cliente" role="tabpanel" aria-labelledby="cliente-tab">

                        <div class="row text-center">
                            <div class="alert alert-danger alert-dismissible fade show ml-4 me-4 messageBox d-none"
                                role="alert"></div>
                            <form id="regCliente" class="py-3">
                                @csrf
                                <div class="row">
                                    <div class="col-sm">
                                        <input class="form-control my-1" type="file" name="cli_img" id="cli_img">
                                        <div class="img-holder mb-2" name>
                                        </div>
                                        <p class="errorFileType d-none alert-danger">Ficheiro invalido</p>
                                    </div>
                                    <div class="col-sm">
                                        <input type="email" name="cli_email" class="form-control my-2"
                                            placeholder="Endereço de e-mail" required="required" id="cli_email">
                                        <input type="password" name="cli_senha" class="form-control my-2" minlength="6"
                                            placeholder="Sua senha" required="required" id="cli_senha">
                                        <input type="password" name="cli_csenha" class="form-control my-2" minlength="6"
                                            placeholder="confirmar Senha" required="required" id="cli_csenha">
                                        <p class="text-danger d-none" id="txtConfirm">A senha não corresponde</p>
                                        <input type="text" name="cli_nome" class="form-control my-2"
                                            placeholder="Nome Completo" id="cli_nome">
                                    </div>
                                </div>
                                {{-- <div class="text-left">
                                    <input type="checkbox" name="ruser_checkc" class="checkbox" required> <span>Eu concordo com o <a class="nav-link" href="#">contrato de oferta</a></span>
                                </div> --}}
                                <div class="text-left">
                                    <input type="checkbox" name="ruser_checkp" class="checkbox" required> Politica
                                    de
                                    privacidade
                                </div>
                                <div class="my-3 justify-content-center">
                                    <button type="submit" class="text-center btn btn-principle" id="btnRegCliente"><span
                                            class="text-white">Submeter</span> <img class="img d-none load"
                                            src="{{ asset('img/ajax-loader.gif') }}" alt=""></button>
                                </div>
                                {{-- <small class="d-none text-danger">A senha deve ter pelomenos 6 caracteres</small><br>
                                <small class="d-none text-danger">Todos os campos são obrigatórios</small> --}}
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="especialista" role="tabpanel" aria-labelledby="especialista-tab">
                        <div class="row">
                            <div class="alert alert-danger alert-dismissible fade show ml-4 me-4 espError d-none"
                                role="alert"></div>
                            <form id="regEspecialista">
                                @csrf
                                <div class="border-bottom text-left p-2 tab" id="tab1">
                                    <div>
                                        <h3>Informação geral</h3>
                                        <p>
                                            <input type="text" name="esp_nome" id="esp_nome" class="form-control m-2"
                                                placeholder="Nome Completo">
                                        <p class="text-danger d-none" id="txtNomeMsg">Esse campo é obrigatorio</p>
                                        </p>
                                        <p>
                                            <input type="number" name="esp_telefone" id="esp_telefone"
                                                class="form-control m-2" placeholder="Telefone para contacto">
                                        </p>
                                        <p>
                                            <input type="email" name="esp_email" id="esp_email" class="form-control m-2"
                                                placeholder="Endereço de e-mail">
                                        </p>
                                        <p>
                                            <input type="password" name="esp_senha" class="form-control m-2"
                                                minlength="6" placeholder="Sua senha" id="esp_senha">
                                        </p>
                                        <p>
                                            <input type="password" name="esp_csenha" class="form-control m-2"
                                                minlength="6" placeholder="confirmar Senha" id="esp_csenha">
                                        <p class="text-danger d-none" id="txtEspConfirm">A senha não corresponde</p>
                                        </p>

                                    </div>
                                    <div style="overflow:auto;">
                                        <div style="float:right;">
                                            <button class="btn btn-principle m-2" type="button"
                                                id="next1">Proximo</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom text-left p-2 tab" id="tab2">
                                    <div>

                                        <h3>Educação</h3>
                                        <p>
                                            <select class="form-control m-2 selecao" name="esp_instituicao"
                                                id="esp_instituicao" required="required">
                                                <option class="form-control" value="">Instituição educacional
                                                </option>
                                                @foreach ($listaInstituicao as $instituicao)
                                                    <option class="form-control"
                                                        value="{{ $instituicao->inst_id }}">
                                                        {{ $instituicao->inst_nome }}</option>
                                                @endforeach
                                            </select>
                                        </p>
                                        <p>
                                            <input type="text" name="esp_especialidade" id="esp_especialidade"
                                                class="form-control m-2" placeholder="Sua area de especializacao"
                                                required="required">
                                        </p>
                                        <p>
                                            <select class="form-control m-2 selecao" name="esp_estado" id="esp_estado"
                                                required="required">
                                                <option class="form-control">Estudante</option>
                                                <option class="form-control">Docente</option>
                                                <option class="form-control">Professor</option>
                                                <option class="form-control">Formador</option>
                                            </select>
                                        </p>
                                    </div>
                                    <div style="overflow:auto;">
                                        <div style="float:right;">
                                            <button class="btn btn-primary m-2" type="button"
                                                id="ante1">Anterior</button>
                                            <button class="btn btn-principle m-2" type="button"
                                                id="next2">Proximo</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-bottom text-left p-2 tab" id="tab3">
                                    <div>
                                        <h2>Perfil</h2>
                                        <p>
                                            <input class="form-control my-1" type="file" name="esp_img" id="esp_img">
                                        <div class="img-holder-esp mb-2" name>
                                        </div>
                                        <p class="errorFileType-esp d-none alert-danger">Ficheiro invalido</p>
                                        </p>
                                        <p>
                                            <textarea name="esp_sobre" id="esp_sobre" class="form-control p-2" rows="4"
                                                placeholder="Sobre"></textarea>
                                        </p>
                                        <p>
                                            <select class="form-control my-2" name="cuser_assunto" id="cuser_assunto">
                                                <option class="form-control" value=" ">Escolha variante</option>
                                                <option class="form-control">Testes</option>
                                                <option class="form-control">Trabalhos</option>
                                                <option class="form-control">TCC's</option>
                                                <option class="form-control">Exercicios</option>
                                            </select>
                                        </p>
                                    </div>
                                    <div style="overflow:auto;">
                                        <div style="float:right;">
                                            <button class="btn btn-primary m-2" type="button"
                                                id="ante2">Anterior</button>
                                            <button class="btn btn-principle m-2" type="submit"><span
                                                    class="text-white">Submeter</span> <img
                                                    class="img d-none load" src="{{ asset('img/ajax-loader.gif') }}"
                                                    alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
