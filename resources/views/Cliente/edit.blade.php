@extends('layouts.app')
@section('htmlheader_titulo', 'Editar Cliente')

@section('scripts_adicionais')
    <script type="text/javascript" src=" {{ asset('plugins/maskedinput/jquery.maskedinput.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function($) {
            $("#cpf").mask("999.999.999-99");
        });
        $(document).ready(function($) {
            $("#telefone").mask("(99)99999-9999");
        });
    </script>
@endsection

@section('conteudo')
    <div class="card">
        <div class="card-body">
            <div class="container">
                <section class="content-header">
                    <div class="col-sm-12">
                        <h2>Edição de Cadastro </h2>
                    </div>
                </section>
                @if (Session::has('mensagem'))
                    <div class="alert alert-danger alert-dismissible">
                        <!-- data-dismiss - clas para fechar o button que abrir sem precisar de nada  -->
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <h5><i class="icon fas fa-ban"></i>Atenção!</h5>
                        {{ Session::get('mensagem') }}
                    </div>
                @endif
                <form action="/clientes/{{ $cliente->id }}" id="alterCliente" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-3">
                            <label>Nome</label><br>
                            <input type="text" name='nome' value="{{ $cliente->nome }}"
                                class="form-control 
                @error('nome') is-invalid @enderror"
                                value="{{ old('nome') }}"><br>
                            @error('nome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-2">
                            <label>Data de Nascimento</label><br>
                            <input type="date" name='dataNascimento' value="{{ $cliente->dataNascimento }}"
                                class="form-control @error('dataNascimento') is-invalid @enderror"
                                value="{{ old('dataNascimento') }}"><br>
                            @error('dataNascimento')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-2">
                            <label>Telefone</label><br>
                            <input type="text" id='telefone' name='telefone' value="{{ $cliente->telefone }}"
                                class="form-control @error('telefone') is-invalid @enderror"
                                value="{{ old('telefone') }}"><br>
                            @error('telefone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-2">
                            <label>E-mail</label><br>
                            <input type="text" name='email' value="{{ $cliente->email }}"
                                class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"><br>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-2">
                            <label>CPF</label><br>
                            <input type="text" id='cpf' name='cpf' value="{{ $cliente->cpf }}"
                                class="form-control  @error('cpf') is-invalid @enderror" value="{{ old('cpf') }}"><br>
                            @error('cpf')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-4">
                            <label>Endereço</label><br>
                            <input type="text" name='endereco' value="{{ $cliente->endereco }}"
                                class="form-control  @error('endereco') is-invalid @enderror"
                                value="{{ old('endereco') }}"><br>
                            @error('endereco')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" form="alterCliente" class="btn btn-info float-right"
                                style="margin:32px 0 0 50px;">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
