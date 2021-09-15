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
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Alteração de senha') }}</div>

                    <div class="card-body">
                        <div id="mensagensResetPass" class="alert d-none"></div>
                        <form id="resetPass">
                            @csrf
                            <input type="hidden" name="verification_code" value="{{ $verification_code }}">
                            <div class="form-group row">
                                <div class="">
                                    <input id="user_pass" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="user_pass" required
                                    placeholder="Insira a nova senha" minlength="6">
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <div class="">
                                    <input id="user_cpass" type="password"
                                    class="form-control name="user_cpass" required
                                    placeholder="Confirme a senha" minlength="6">
                                    
                                    <span id="err_msg" class="d-none alert text-danger" role="alert">
                                        <strong>A senha não corresponde</strong>
                                    </span>

                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <div class="">
                                    <button type=" submit"
                                    class="btn btn-primary">
                                    {{ __('Alterar') }} <img id="loadReset" class="img d-none load"
                                    src="{{ asset('img/ajax-loader.gif') }}" alt="">
                                    </button>
                                </div>
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
    <script src="{{ asset('site/js/contact.js') }}"></script>
@endsection
