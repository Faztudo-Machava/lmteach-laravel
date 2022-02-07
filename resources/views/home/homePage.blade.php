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
    <div class="heroHome d-flex align-items-center"
        style="background-image: url('{{ asset('img/bg.svg') }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 col-md-12">
                    <div class="pt-5" data-aos="fade-up" data-aos-duration="400">
                        <h1 class="mb-4 heroTitle text-dark">Plataforma de <span class="text-principle">ajuda</span> <br>
                            academica</h1>
                        <div class="mb-4"></div>
                        <p class="fs-5 mb-2">Faça pedido de trabalhos de curso, monografias,</p>
                        <p class="fs-5 mb-2">testes para qualquer nivel academico. Trabalhos</p>
                        <p class="fs-5 mb-2">de qualidade em pouco tempo de resolução</p>
                        <div class="mb-5"></div>
                        <div class="row">
                            <span class="col-10">
                                <span class="col-sm-12 col-md-6 col-lg-6 me-3 divBtnPedido">
                                    <a href="#"
                                        class="btn bg-light p-4 py-3 text-bold btn-pedido text-nowrap font-weight-bold"
                                        data-bs-toggle="modal" data-bs-target="#pedidoModal">
                                        FAZER PEDIDO</a>
                                </span>
                                <span class="col-sm-12 col-md-6 col-lg-6">
                                    <a href="{{ route('pedidos') }}"
                                        class="btn bg-light p-4 py-3 btn-jobs fw-bold">TRABALHOS</a>
                                </span>
                            </span>

                        </div>
                    </div>
                </div>
                <!-- Section One -->
                <div class="col-sm-12 col-lg-6 col-md-6 mx-auto divHeroImg">
                    <img class="img img-fluid img-hero" src="{{ asset('img/girl.svg') }}" alt="Mo">
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white py-3 position-relative" id="espCli">
        <div class="container-fluid row mt-5 mx-0 px-0 text-dark ml-0" id="espCard">
            <div class="col-lg-6 d-flex flex-column justify-content-center"
                style="background-image: url('{{ asset('img/back1.svg') }}'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
                <div class="stepsImg">
                    <img class="img img-fluid" src="{{ asset('img/boy.svg') }}" alt="steps">
                </div>
            </div>
            <div class="col-lg-6 p-3">
                <div class="p-3 text-center">
                    <h1 class="fs-1">Faça seu pedido</h1>
                    <p class="text-muted">Para fazer pedido, siga os passos a seguir.</p>
                </div>
                <div class="px-2 row justify-content-center m-2">
                    <div
                        class="col-lg row">
                        <p>1. Faça o pedido através do formulário em nosso site</p>
                    </div>
                </div>
                <div class="px-2 row justify-content-center m-2">
                    <div
                        class="col-lg row">
                        <p>2. Pague 50% do custo do trabalho. Saiba mais sobre as formas de pagamento <a target="blank"
                                href="https://chat.whatsapp.com/FjPNNWGVuJOBGnJ9A78U6u">aqui</a></p>
                    </div>
                </div>
                <div class="px-2 row justify-content-center m-2">
                    <div
                        class="row col-lg">
                        <p>3. Aguarde algum tempo para que nossos especialistas concluam seu pedido</p>
                    </div>
                </div>
                <div class="px-2 row justify-content-center m-2">
                    <div
                        class="col-lg row">
                        <p>4. Antes de receber o trabalho, deverá pagar os 50% restantes do custo do pedido.</p>
                    </div>
                </div>
            </div>
            <div class="esp" id="turnPedido">
                <img class="esp-text" src="{{ asset('img/Group.svg') }}" alt="" srcset="">
                <img class="esp-icon" src="{{ asset('img/Group 2.svg') }}" alt="" srcset="">
            </div>
        </div>
        <div class="container-fluid row mt-5 mx-0 px-0 text-dark ml-0" id="pedCard">
            <div class="col-lg-6 p-3">
                <div class="p-3 text-center">
                    <h1 class="fs-1">Seja um especialista</h1>
                    <p class="text-muted">Para ser um especialista, siga os passos a seguir.</p>
                </div>
                <div class="px-2 row justify-content-center m-2">
                    <div
                        class="col-lg row">
                        <p>1. Clique na ENTRAR opção em nosso site. </p>
                    </div>
                </div>
                <div class="px-2 row justify-content-center m-2">
                    <div
                        class="col-lg row">
                        <p>2. Escolha a opção REGISTRAR-SE.</p>
                    </div>
                </div>
                <div class="px-2 row justify-content-center m-2">
                    <div
                        class="row col-lg">
                        <p>3. Cadastre-se como um ESPECIALISTA.</p>
                    </div>
                </div>
                <div class="px-2 row justify-content-center m-2">
                    <div
                        class="col-lg row">
                        <p>4. Acesse o seu email e confirme o registro.</p>
                    </div>
                </div>
                <div class="px-2 row justify-content-center m-2">
                    <div
                        class="col-lg row">
                        <p>5. Acesse o painel de utilizador para ver os trab;hos disponiveis.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center"
                style="background-image: url('{{ asset('img/back1.svg') }}'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
                <div class="stepsImg">
                    <img class="img img-fluid" src="{{ asset('img/boy2.svg') }}" alt="steps">
                </div>
            </div>
            <div class="esp" id="turnEspecialista">
                <img class="cli-text" src="{{ asset('img/GPedido.svg') }}" alt="" srcset="">
                <img class="cli-icon" src="{{ asset('img/Group 3.svg') }}" alt="" srcset="">
            </div>
        </div>
    </div>
    <div class="divPedidos">
        <div class="py-4 container">
            <div class="row justify-content-center">
                <div class="p-4">
                    <div class="my-5 text-center">
                        <h2 class="h2">Pedidos recentes</h2>
                    </div>
                    <div class="">
                        <div class="">
                            @if ($numPedidos > 0)
                                <div class="cards row d-flex justify-content-center">
                                    <div class="d-none">{{ $delay = 50 }} {{ $i = 0 }}</div>
                                    @foreach ($listaPedidos as $pedido)
                                        @if ($i < 4)
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
                <div class="esp" id="ajudaSection">
                    <img class="help-text" src="{{ asset('img/Group10.svg') }}" alt="" srcset="">
                    <img class="star-icon" src="{{ asset('img/Star 1.svg') }}" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white" id="coments">
        <div class="container mt-md-5">
            <div class="py-4 mt-3">
                <h1 class="mb-0 text-center">Comentarios</h1>
            </div>
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <p class="fw-bold fs-5">Mais de <span class="text-principle">300 <br> estudantes</span> <br> escolheram-nos <br> e esse é apenas <br> o começo</p>
                    </div>
                    <div class="p-5 shadow coment1 ml-lg-" style="background-image: url('{{ asset('img/Rectangle 9.svg') }}'); background-repeat: no-repeat; background-size: cover; background-position: center center; border-top-left-radius: 120px; border-top-right-radius: 120px; z-index: 1;">
                        <h3 class="mt-4">Eric da Silva</h3>
                        <p>
                            Ajudaram-me com o trabalho de monografia e defendi com 18. O tema era realmente dificil, mas
                            os especialistas em pouco tempo o fizeram. São muito profissipnais e serios. Aconselho-vos!
                        </p>
                    </div>
                </div>
                <div class="col d-flex align-items-center">
                    <div class="p-5 shadow coment2" style="background-image: url('{{ asset('img/Rectangle 3.svg') }}'); background-repeat: no-repeat; background-size: cover; background-position: center center; border-radius: 160px;">
                        <h3 class="mt-4">Kevin Manuel</h3>
                        <p>
                            Ajudaram-me com o trabalho de monografia e defendi com 18. O tema era realmente dificil, mas
                            os especialistas em pouco tempo o fizeram. São muito profissionais e serios. Aconselho-vos!
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-5 shadow coment3" style="background-image: url('{{ asset('img/Rectangle 4.svg') }}'); background-repeat: no-repeat; background-size: cover; background-position: center center; margin: 10px 30px; border-top-left-radius: 120px; border-top-right-radius: 120px; z-index: 5;">
                        <h3 class="mt-4">Carla Francisco</h3>
                        <p>
                            Resolveram o meu teste de mecânica aplicada em menos de uma hora. Resolveram todo ele correctamente. A plaforma é muito boa e a interactividade é incrivel.
                        </p>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <p class="fw-bold fs-5">A nossa equipe <br> <span class="text-principle">agradece</span> pela <br> vossa confiança!</p>
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
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-dismissible fade show ml-4 me-4 espError d-none" role="alert"
                            id="pedidoMsg"></div>
                        <form class="card border-none p-2" id="formPedido">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 p-3">
                                    <select class="form-control pl-3 selecao" name="pedi_nivel" id="pedi_nivel"
                                        required>
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
                                <button type="submit" id="submeter"
                                    class="btn btn-sm btn-light btn-pedido px-3 py-2"> <span
                                        class="text-black">Submeter</span> <img class="img d-none load"
                                        src="{{ asset('img/ajax-loader.gif') }}" alt="loader"> </button>
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
                <div
                    class="modal-header @php
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
                                <i class="bi bi-check2-circle fa-2x text-success"></i>
                            </div>
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
    <script>
        $('#turnPedido').click(function() {
            $('#espCard').css('display', 'none')
            $('#pedCard').css('display', 'flex')
        })

        $('#turnEspecialista').click(function() {
            $('#espCard').css('display', 'flex')
            $('#pedCard').css('display', 'none')
        })
    </script>
@endsection
