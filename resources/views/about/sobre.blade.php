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
            <div class="col-sm-0 col-lg-6 col-md-6 divImgContact">
                <img class="img img-fluid" src="{{ asset('img/happy-students-or-pupils-watching-study-webinar-isolated-flat-illustration_74855-14070.png') }}" alt="Mo">
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6 row justify-content-center align-items-center">
                <div class="mt-5 mt-lg-0">
                    <h2 class="py-3">Sobre nós</h3>
                    <p class="fs-5">A LMTeacher é uma plataforma que veio trazer oportunidade a todos. É uma plataforma de ajuda académica, onde a partir dela, podes pedir a resolução de qualquer tipo de trabalho, desde resolução de testes, exames, redução de diplomas de licenciatura e mestrado.
                        A plataforma é referente para qualquer nível académico.</p>
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
