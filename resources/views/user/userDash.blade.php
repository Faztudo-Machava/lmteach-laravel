@extends('layouts.userLayout')
@section('content')
    <div class="container-fluid bg-transparent py-5">
        <div class="container">
            <div class="main-body">
                <div class="gutters-sm">
                    <div class="mb-3">
                        <div class="card bg-transparent border-none">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <div class="">
                                        @if (session('user')->user_tipo == 'admin')
                                            <img id="updateImgModel" src="{{ asset('img/avatar.svg') }}"
                                                class="img-fluid imgperfil rounded-pill" alt="" role="button">
                                        @else
                                            @if (session('user')->user_img)
                                                <img id="updateImgModel"
                                                    src="{{ asset('storage/' . session('user')->user_img) }}"
                                                    class="img-fluid imgperfil rounded-pill" alt="" role="button">
                                            @else
                                                <img id="updateImgModel" src="{{ asset('img/avatar.svg') }}"
                                                    class="img-fluid imgperfil rounded-pill" alt="" role="button">
                                            @endif
                                        @endif
                                    </div>
                                    <div class="mt-3">
                                        <h4>{{ session('user')->user_nome }}</h4>
                                        <p class="text-secondary mb-1">{{ session('user')->email }}</p>
                                        <p class="text-muted font-size-sm">{{ session('user')->user_tipo }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="alert">
                        
                    </div>
                    <div class="">
                        @if (session('user')->user_diploma == '' && session('user')->user_tipo == 'especialista')
                            <div class="my-5">
                                <form action="{{route('updateDoc')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Certificado/Documento</label>
                                        <p class="text-danger">*Anexe o seu certificado ou uma fotografia com seu BI.
                                        </p>
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="file" name="user_diploma" id="user_diploma" class="form-control">
                                            </div>
                                            <div class="col-4">
                                                <button class="btn btn-principle text-white" type="submit">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        @endif
                        <div class="card border-none shadow-sm mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nome</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ session('user')->user_nome }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ session('user')->email }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Contacto</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        @if (session('user')->user_telefone)
                                            {{ session('user')->user_telefone }}
                                        @else
                                        <div>
                                            <p class="text-danger">*Actualize o seu número de celular para uma boa
                                                experiencia dentro do site</p>
                                        </div>
                                        <form class="row" action="{{ route('updateCelular') }}"
                                            method="POST">
                                            @csrf
                                            <div class="form-group col">
                                                <input class="form-control" type="number" name="contacto" placeholder="Numero de celular">
                                            </div>
                                            <div class="form-group col">
                                                <button class="btn btn-principle text-white"><i
                                                        class="bi bi-pencil-fill"></i></button>
                                            </div>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Tipo de usuario</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ session('user')->user_tipo }}
                                    </div>
                                </div>
                                <hr>
                                @if (session('user')->user_tipo == 'especialista')
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Nivel academico</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            @if (session('user')->esp_nivel)
                                                {{ session('user')->esp_nivel }}
                                            @else
                                                <div>
                                                    <p class="text-danger">*Actualize o seu nivel academico para uma boa
                                                        experiencia dentro do site</p>
                                                </div>
                                                <form class="row" action="{{ route('updateNivel') }}"
                                                    method="POST">
                                                    @csrf
                                                    <div class="form-group col">
                                                        <select class="form-control mb-2" name="esp_nivel" id="esp_nivel"
                                                            required="required">
                                                            <option value="" class="form-control">Selecione o Nível
                                                                académico
                                                            </option>
                                                            <option class="form-control">Médio</option>
                                                            <option class="form-control">Técnico profissional</option>
                                                            <option class="form-control">Superior</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col">
                                                        <button class="btn btn-principle text-white"><i
                                                                class="bi bi-pencil-fill"></i></button>
                                                    </div>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Instituição</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $instituicao->inst_nome }}
                                        </div>
                                    </div>
                                    <hr>
                                @endif
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button class="btn btn-info rounded-pill px-3 py-2 text-white"
                                            data-bs-toggle="modal" data-bs-target="#userUpdateModal">Atualizar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
