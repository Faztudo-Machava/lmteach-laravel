<div class="bg-light py-4" id="servicos">
    <div class="container">
        <div class="row justify-content-center pb-5" data-aos="fade-up" data-aos-duration="1200">
            <div class="col-md-7 text-center">
                <h2 class="mb-3">Nossos Serviços</h2>
            </div>
        </div>
        <div class="row divServicos">
            <div class="p-2 col-sm-12 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-duration="1200">
                <div class="card p-4 h-transDown shadow">
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
            <div class="p-2 col-sm-12 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-duration="1200">
                <div class="card p-4 h-transDown shadow">
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
            <div class="p-2 col-sm-12 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-duration="1200">
                <div class="card p-4 h-transDown shadow">
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
            <div class="p-2 col-sm-12 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-duration="1200">
                <div class="card p-4 h-transDown shadow">
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
<div class="bg-light py-5" id="contacto">
    <div class="container">
        <div class="contact_us">
            <div class="row text-center mb-2">
                <h2 class="h2">Contacte-nos</h2> 
                <p>Se você tiver qualquer duvida deixe o seus dados que os nossos especialistas entrarão em contacto</p>
            </div>
            <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1200">
                <div class="col-sm-0 col-lg-6 col-md-6 divImgContact">
                    <img class="img img-fluid d-block banner-img" src="{{ asset('img/contact_us.svg') }}" alt="Mo">
                </div>
                <div class="col-sm-12 col-lg-6 col-md-6">
                    <div class="mt-5 mt-lg-0">
                        <div class="alert alert-success d-none" id="mailSuccess">Mensagem enviada com sucesso</div>
                        <div class="alert alert-danger d-none" id="mailFalha">Falha no envio da mensagem</div>
                        <form id="contactForm">
                            @csrf
    
                            <div class="form-group">
                                <input type="text" name="mail_nome" class="form-control" id="nome" placeholder="Nome"
                                    required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="email" class="form-control" name="mail_email" id="email" placeholder="Email"
                                    required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="mail_assunto" id="assunto"
                                    placeholder="Assunto" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="mail_mensagem" rows="5" placeholder="Mensagem"
                                    required></textarea>
                            </div>
                            <div class="text-center form-group mt-3">
                                <button class="btn btn-principle text-white rounded-pill h-float btn-contacte"
                                    type="submit">
                                    <span class="text-white">Enviar</span> <img class="img d-none load"
                                        src="{{ asset('img/ajax-loader.gif') }}" alt=""></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mx-auto bg-principle">
    <div class="container">
        <div class="row justify-content-center top-part">
            <div class="row text-center my-5 text-white">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 flex-column">
                    <div class="text-center">
                        <i class="bi bi-gear fs-1"></i>
                    </div>
                    <div class="text-center">
                        <div class="text-uppercase">Suporte ao cliente</div>
                        <small>Suporte completo ao projecto</small>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 flex-column">
                    <div class="text-center">
                        <i class="bi bi-hand-thumbs-up fs-1"></i>
                    </div>
                    <div class="text-center">
                        <div class="text-uppercase">Garantia da qualidade</div>
                        <small>Somente funcionários profissionais</small>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 flex-column mt-3">
                    <div class="text-center">
                        <i class="fa fa-dollar-sign fs-1"></i>
                    </div>
                    <div class="text-center">
                        <div class="text-uppercase">PREÇOS DEMOCRÁTICOS</div>
                        <small>Não exageramos o custo</small>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 flex-column align-items-center">
                    <div class="text-center">
                        <i class="bi bi-pencil-square fs-1"></i>
                    </div>
                    <div class="text-center">
                        <div class="text-uppercase">EDIÇOES GRATUITAS</div>
                        <small>Corrigindo notas sobre o projeto</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xs container-sm container-md container-lg">
            <div class="row py-3 text-sm-center text-xs-center text-md-center text-lg-start align-items-start footer justify-content-lg-center">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 order-xs-2 order-sm-2 order-md-1 row justify-content-lg-center">
                    <div class="col-lg-8">
                        <div class="">
                            <h3 class="h3 text-white">LMTEACHER</h3>
                        </div>
                        <div class="my-3">
                            <span class="text-white text-nowrap"> <i class="bi bi-envelope-fill me-2"></i> lmteach.inc@gmail.com </span>
                        </div>
                        <div class="flex-row">
                            <i class="bi bi-facebook text-white fs-3 me-3"></i>
                            <i class="bi bi-whatsapp text-white fs-3 me-3"></i>
                            <i class="bi bi-instagram text-white fs-3"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 order-xs-1 order-sm-1 order-md-2 row justify-content-lg-center">
                    <div class="col-lg-8">
                        <h3 class="text-white h3">Serviços</h3>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link text-white"> Papéis de teste </a></li>
                            <li class="nav-item"><a class="nav-link text-white"> Curso </a></li>
                            <li class="nav-item"><a class="nav-link text-white"> Resolvendo problemas </a></li>
                            <li class="nav-item"><a class="nav-link text-white"> Tarefas práticas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 order-xs-3 order-sm-3 order-md-3 mt-xs-5 mt-sm-5 mt-lg-0 row justify-content-lg-center">
                    <div class="col-lg-8">
                        <h3 class="h3 text-white">Apoio, suporte</h3>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link text-white"> Mapa do site </a></li>
                            <!-- <li><a href="{$contact}">Contatos</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-light">
    <div class="container">
        <div class="row py-4">
            <div class="d-flex justify-content-center text-principle fs-8">
                LMTGROUP &copy 2021 | Todos direitos reservados
            </div>
        </div>
    </div>
</div>
