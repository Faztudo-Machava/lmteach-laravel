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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="#servicos">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Sobre</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="">Ajuda</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="#contacto">Contacto</a></li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle text-dark" id="navdropdown" role="button"
                            data-toggle="dropdown">Usuario</a>
                        <div class="drop-menu bg-white rounded border-1 border-principle" aria-labelledby="navdropdown">
                            <button class="dropdown-item nav-link drop-item mt-2" data-bs-toggle="modal" data-bs-target="#login">Entrar</button>
                            <div class="dropdown-divider"></div>
                            <button class="dropdown-item nav-link mb-2" data-bs-toggle="modal" data-bs-target="#cadUsers">Registrar-se</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header><!-- Fim Header -->


<!-- =============Formulario de login================= -->
<form class="form" id="formLogin">
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
        {{ csrf_field() }}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="txtLogin">Iniciar sessão</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="alert alert-danger d-none messageBox" id="error"></div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="txtEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="txtEmail" aria-describedby="emailHelp"
                            name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="txtPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="txtPassword" name="password" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn">Entrar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- =============Formulario de criação de user================= -->
<div class="modal fade" id="cadUsers" tabindex="-1" aria-labelledby="addUser" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUser">Inscreve-se</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="alert alert-info" role="alert">
                ANTENÇÃO: Para criar conta é necessario que seja cliente do Palvic!
            </div>
            <form class="form" action="/addUtilizadorCliente" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="tEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="tEmail" aria-describedby="emailHelp"
                            name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="tPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="tPassword" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmarPass" class="form-label">Confirmar password</label>
                        <input type="password" class="form-control" id="confirmarPass" name="confirmarPassword"
                            required>
                    </div>
                    <div class="alert alert-danger d-none passConfirmMessage" id="error"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn" id="inscrever" disabled>Inscrever</button>
                </div>
            </form>
        </div>
    </div>
</div>

