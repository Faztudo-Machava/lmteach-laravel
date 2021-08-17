@extends('index')
@section('css')

@endsection
@section('titulo')
    LMTEACH
@endsection
@section('conteudo')
    <div class="container my-5 text-white">
        <div class="row hero mt-5">
            <div class="col-lg-5">
                <div class="text mt-5 pt-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300"
                    data-aos-duration="1000">
                    <span class="subheading">Bem vindo ao lmteach</span>
                    <h1 class="mb-4">Best Online Education Expertise </h1>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        there live the blind texts.</p>
                    <p>
                        <a href="#" class="btn btn-principle p-4 py-3 text-white font-weight-bold">FAZER PEDIDO</a>
                        <a href="#" class="btn bg-white p-4 py-3 font-weight-bold text-principle">TRABALHOS</a>
                    </p>
                </div>
            </div>
            <!-- Section One -->
            <div class="col-lg-5 mx-auto ml-3">
                <img class="img img-fluid d-block banner-img" src="{{ asset('img/gk.png') }}" alt="Mo">
            </div>
        </div>
    </div>
    <div class="d-flex bg-white">
        <div class="container row mt-5 mx-auto text-dark">
            <div class="col-lg-4 p-4 text-center mt-5 mb-1 desc">
                <div class="row justify-content-center">
                    <p class="bg-principle text-white car-title row justify-content-center align-items-center rounded-pill">
                        1</p>
                </div>
                <div class="p-1">
                    <p>Faça o pedido através do formulário em nosso site</p>
                </div>
            </div>
            <div class="col-lg-4 p-4 text-center mt-5 mb-1 desc">
                <div class="row justify-content-center">
                    <p class="bg-principle text-white car-title row justify-content-center align-items-center rounded-pill">
                        2</p>
                </div>
                <div class="p-1">
                    <p>Pague 50% do custo do trabalho. Saiba mais sobre as formas de pagamento</p> <a href="#mais">aqui</a>
                </div>
            </div>
            <div class="col-lg-4 p-4 text-center mt-5 mb-1 desc">
                <div class="row justify-content-center">
                    <p class="bg-principle text-white car-title row justify-content-center align-items-center rounded-pill">
                        3</p>
                </div>
                <div class="p-1">
                    <p>Aguarde alguns dias para que nossos especialistas concluam seu pedido</p>
                </div>
            </div>
            <div class="col-lg-4 p-4 text-center mt-1 mb-5">
                <div class="row justify-content-center">
                    <p class="bg-principle text-white car-title row justify-content-center align-items-center rounded-pill">
                        4</p>
                </div>
                <div class="p-1">
                    <p>Antes receber o trabalho, você deve pagar os 50% restantes do custo do trabalho.</p>
                </div>
            </div>
            <div class="col-lg-4 p-4 text-center mt-1 mb-5">
                <div class="row justify-content-center">
                    <p class="bg-principle text-white car-title row justify-content-center align-items-center rounded-pill">
                        5</p>
                </div>
                <div class="p-1">
                    <p>Resta preparar-se bem para a defesa e executá-la brilhantemente</p>
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
                <div class="p-2 col-lg-3">
                    <div class="card p-4">
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
                        <button class="btn btn-outline-principle">Pedir</button>
                    </div>
                </div>
                <div class="p-2 col-lg-3 ">
                    <div class="card p-4">
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
                        <button class="btn btn-outline-principle">Pedir</button>
                    </div>
                </div>
                <div class="p-2 col-lg-3">
                    <div class="card p-4">
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
                        <button class="btn btn-outline-principle">Pedir</button>
                    </div>
                </div>
                <div class="p-2 col-lg-3">
                    <div class="card p-4">
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
                        <button class="btn btn-outline-principle">Pedir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white" id="contacto">
        <div class="container">
            <div class="row py-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Localização:</h4>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>parquedeestacionamento@verdant.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Contacto:</h4>
                            <p>+258 83 901 1111</p>
                            <p>+258 84 901 1111</p>
                            <p>+258 87 901 1111</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                    required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Mensagem"
                                required></textarea>
                        </div>
                        <div class="text-center form-group mt-3">
                            <button class="btn btn-success text-white" type="submit">Enviar</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
@endsection
