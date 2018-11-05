@extends('pessoas.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar registro</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pessoas.index') }}"> Voltar</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>ERRO!</strong> Dados incorretos.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('pessoas.update',$pessoa->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pessoa:</strong>
                    <input type="text" name="tipo" value="{{ $pessoa->tipo }}" class="form-control" placeholder="Pessoa">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Documento:</strong>
                    <input type="number" name="doc" value="{{ $pessoa->doc }}" class="form-control" placeholder="Documento">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cep:</strong>
                    <input type="number" name="cep" value="{{ $pessoa->cep }}" class="form-control" placeholder="Cep">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Logradouro:</strong>
                    <input type="text" name="logradouro" value="{{ $pessoa->logradouro }}" class="form-control" placeholder="Logradouro">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Numero:</strong>
                    <input type="number" name="numero" value="{{ $pessoa->numero }}" class="form-control" placeholder="Numero">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Complemento:</strong>
                    <input type="text" name="complemento" value="{{ $pessoa->complemento }}" class="form-control" placeholder="Complemento">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bairro:</strong>
                    <input type="text" name="bairro" value="{{ $pessoa->bairro }}" class="form-control" placeholder="Bairro">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cidade:</strong>
                    <input type="text" name="cidade" value="{{ $pessoa->cidade }}" class="form-control" placeholder="Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Uf:</strong>
                    <input type="text" name="uf" value="{{ $pessoa->uf }}" class="form-control" placeholder="Uf">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
   
    </form>
@endsection