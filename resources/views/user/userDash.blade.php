@extends('layouts.userLayout')
@section('content')
    <div class="container-fluid bg-transparent py-5">
        <div class="container">
            <div class="main-body">
                <div class="gutters-sm">
                    <div class="mb-3" data-aos="fade-down" data-aos-duration="1000">
                        <div class="card bg-transparent border-none">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{ asset('img/avatar.png') }}" class="imgperfil">
                                    <div class="mt-3">
                                        <h4>{{ session('user')->user_nome }}</h4>
                                        <p class="text-secondary mb-1">{{ session('user')->email }}</p>
                                        <p class="text-muted font-size-sm">{{ session('user')->user_tipo }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="" data-aos="fade-down" data-aos-duration="1200">
                        <div class="card mb-3">
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
                                @if (session('user')->user_tipo != 'cliente')
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Telefone</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ session('user')->user_telefone }}
                                        </div>
                                    </div>
                                    <hr>
                                @endif
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Tipo de usuario</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ session('user')->user_tipo }}
                                    </div>
                                </div>
                                <hr>
                                @if (session('user')->user_tipo != 'cliente')
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Instituição</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ session('user')->user_instituicao }}
                                        </div>
                                    </div>
                                    <hr>
                                @endif
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#userUpdateModal">Atualizar</button>
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
