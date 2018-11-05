@extends('pessoas.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adicionar novo registro</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pessoas.index') }}"> Voltar</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Ops!</strong> Dados incorretos.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('pessoas.store') }}" method="POST">
    @csrf
  
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pessoa:</strong>
                <input type="text" name="tipo" class="form-control" placeholder="Pessoa">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Documento:</strong>
                <input type="number" name="doc" class="form-control" placeholder="Documento">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data:</strong>
                <input type="text" name="data" class="form-control" placeholder="Data">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome ou Razão Social:</strong>
                <input type="text" name="nome_razao" class="form-control" placeholder="Nome/Razão">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>SobreNome ou Nome Fantasia:</strong>
                <input type="text" name="sobre_fantasia" class="form-control" placeholder="Sobre/Fantasia">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cep:</strong>
                <input type="number" name="cep" class="form-control" placeholder="Cep">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Logradouro:</strong>
                <input type="text" name="logradouro" class="form-control" placeholder="Logradouro">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numero:</strong>
                <input type="number" name="numero" class="form-control" placeholder="Numero">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Complemento:</strong>
                <input type="text" name="complemento" class="form-control" placeholder="Complemento">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bairro:</strong>
                <input type="text" name="bairro" class="form-control" placeholder="Bairro">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cidade:</strong>
                <input type="text" name="cidade" class="form-control" placeholder="Cidade">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Uf:</strong>
                <input type="text" name="uf" class="form-control" placeholder="Uf">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
   
</form>
@endsection