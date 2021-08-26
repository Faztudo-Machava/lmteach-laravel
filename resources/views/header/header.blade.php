<!-- ======= Header ======= -->
<header class="header">
    <nav class="navbar navbar-expand-md fixed-top navbar-light bg-white shadow-sm">
        <div class="container">
            <div class="navbar-header container-fluid">
                <a class="navbar-brand font-weight-bold" href="">LMTEACH</a>
                {{-- <button class="navbar-toggler btn-group-vertical" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-menu bg-principle">.</span>
                    <span class="icon-menu bg-principle mt-1">.</span>
                    <span class="icon-menu bg-principle mt-1">.</span>
                </button> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="#servicos">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Sobre</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="">Ajuda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
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
        </div>
    </nav>
</header><!-- Fim Header -->


<!-- =============Formulario de login================= -->
<form class="form" id="formLogin" action="{{ route('usuario') }}">
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
        {{ csrf_field() }}
        <div class="modal-dialog modal-lg modal-dialog-centered login-modal">
            <div class="modal-content login">
                {{-- <div class="">
                    <h5 class="modal-title" id="txtLogin">Iniciar sessão</h5>

                </div> --}}
                <div class="row modal-body p-0 bg-principle">
                    <div class="col-lg p-4 pr-2 bg-white rounded">
                        <div class="d-flex justify-content-center">
                            <i class="bi bi-person-circle fs-1 text-principle"></i>
                        </div>
                        <div class="my-4 d-flex flex-column justify-content-center p-4">
                            {{-- <div class="input-group mb-4 mr-sm-2">
                                <div class="input-group-prepend bg-white">
                                  <div class="input-group-text text-principle"> <i class="bi bi-person-fill"></i></div>
                                </div>
                                <input type="text" class="form-control" id="" placeholder="Email">
                            </div>
                            <div class="input-group mb-4 mr-sm-2">
                                <div class="input-group-prepend bg-white">
                                  <div class="input-group-text text-principle"><i class="bi bi-lock-fill"></i></div>
                                </div>
                                <input type="Password" class="form-control" id="" placeholder="Senha">
                            </div>
                            <div class="input-group mb-4 mr-sm-2">
                                <input class="btn btn-principle rounded-pill text-white px-5 py-2 shadow-sm" type="submit" value="Entrar">
                            </div> --}}
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control rounded-pill" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput"> <i class="bi bi-person-fill"></i> <small>
                                        Email</small></label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control rounded-pill" id="floatingPassword"
                                    placeholder="Password">
                                <label for="floatingPassword"><i class="bi bi-lock-fill"></i>
                                    <small>Senha</small></label>
                            </div>
                            <div class="mb-3">
                                <div class="nav-item">
                                    <a class="nav-link" href="">Esqueceu-se da senha?</a>
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
                                    type="submit">Entrar</button>
                            </div>
                            <hr class="my-4">
                            <div class="row d-flex justify-content-center">
                                <button class="btn btn-login text-uppercase fw-bold" type="submit">
                                    <i class="fab fa-google me-2"></i>
                                </button>
                                <button class="btn btn-login text-uppercase fw-bold" type="submit">
                                    <i class="fab fa-facebook-f me-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="p-3 modal-header">
                            <button color="white" type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- =============Formulario de criação de user================= -->
<div class="modal fade" id="cadUsers" tabindex="-1" aria-labelledby="addUser" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered login-modal">
        <div class="modal-content">
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
                        <form class="form" id="regCliente">
                            {{ csrf_field() }}
                            <div class="row text-center">
                                <div class="p-2">
                                    <h2 class="">Formulário de registo do cliente</h2>
                                </div>
                                <div class="alert alert-danger alert-dismissible fade show ml-4 me-4 messageBox d-none" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <input type="email" name="cli_email" class="form-control my-2" placeholder="Endereço de e-mail" required="required" id="cli_email">
                                <input type="password" name="cli_senha" class="form-control my-2" minlength="6" placeholder="Sua senha" required="required" id="cli_senha">
                                <input type="password" name="cli_csenha" class="form-control my-2" minlength="6" placeholder="confirmar Senha" required="required">
                                <input type="text" name="cli_nome" class="form-control my-2" placeholder="Nome Completo" id="cli_nome">
                                <div class="text-left">
                                    <input type="checkbox" name="ruser_checkc" class="checkbox"> Eu concordo com o
                                    contrato de oferta
                                </div>
                                <div class="text-left">
                                    <input type="checkbox" name="ruser_checkp" class="checkbox"> Politica de
                                    privacidade
                                </div>
                                <div class="my-3 justify-content-center">
                                    <button type="submit" name="submeter" id="submeter"
                                        class="form-control text-center btn btn-success">Registe-se</button>
                                </div>
                                <small class="d-none text-danger">A senha deve ter pelomenos 6 caracteres</small><br>
                                <small class="d-none text-danger">Todos os campos são obrigatórios</small>

                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="especialista" role="tabpanel" aria-labelledby="especialista-tab">
                        <div class="row text-center">
                            <br />
                            <div class="">
                                <h4 class="h4">Registre-se como ESPECIALISTA</h4>
                            </div>
                            <form class="form-group" name="register" id="regForm" method="post">
                                <div style="text-align:center;margin-top:40px;">
                                    <span class="step">1</span>
                                    <span class="step">2</span>
                                    <span class="step">3</span>
                                </div>
                                <br>
                                <br>
                                <div class="border-bottom text-left p-2 tab">
                                    <h3>Informação geral</h3>
                                    <p>
                                        <input type="text" name="cuser_name" id="cuser_name" class="form-control m-2"
                                            placeholder="Nome Completo">
                                    </p>
                                    <p>
                                        <input type="number" name="cuser_telefone" id="cuser_telefone"
                                            class="form-control m-2" placeholder="Telefone para contacto">
                                    </p>
                                    <p>
                                        <input type="email" name="cuser_email" id="cuser_email" class="form-control m-2"
                                            placeholder="Endereço de e-mail">
                                    </p>
                                    <p>
                                        <input type="password" name="cuser_senha" class="form-control m-2" minlength="6"
                                            placeholder="Sua senha">
                                    </p>
                                    <p>
                                        <input type="password" name="cuser_rsenha" class="form-control m-2"
                                            minlength="6" placeholder="confirmar Senha">
                                    </p>
                                </div>
                                <div class="border-bottom text-left p-2 tab">
                                    <h3>Educação</h3>
                                    <p>
                                        <select class="form-control m-2 selecao" name="cuser_instituicao"
                                            id="cuser_instituicao" required="required">
                                            <option class="form-control" value="">Instituição educacional</option>
                                        </select>
                                    </p>
                                    <p>
                                        <input type="text" name="cuser_especialidade" id="cuser_especialidade"
                                            class="form-control m-2" placeholder="Sua area de especializacao"
                                            required="required">
                                    </p>
                                    <p>
                                        <select class="form-control m-2 selecao" name="cuser_estado" id="cuser_estado"
                                            required="required">
                                            <option class="form-control">Estudante</option>
                                            <option class="form-control">Docente</option>
                                            <option class="form-control">Professor</option>
                                            <option class="form-control">Formador</option>
                                        </select>
                                    </p>
                                </div>
                                <div class="border-bottom text-left p-2 tab">
                                    <h2>Perfil</h2>
                                    <p>
                                        <textarea name="cuser_sobre" id="cuser_sobre" class="form-control p-2"
                                            rows="4"></textarea>
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
                                        <button class="btn btn-primary m-2" type="button" id="prevBtn"
                                            onclick="nextPrev(-1)">Previous</button>
                                        <button class="btn btn-principle m-2" type="button" id="nextBtn"
                                            onclick="nextPrev(1)">Next</button>
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

<style>
    .tab {
        display: none;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Step marker: Place in the form. */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #4CAF50;
    }

    input.invalid {
        background-color: #ffdddd;
    }

</style>
