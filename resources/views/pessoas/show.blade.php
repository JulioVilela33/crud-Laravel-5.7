@extends('pessoas.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Registros </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pessoas.index') }}"> Voltar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pessoa:</strong>
                {{ $pessoa->tipo }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Documento:</strong>
                {{ $pessoa->doc }}
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data:</strong>
                {{ $pessoa->data }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome ou Razão social:</strong>
                {{ $pessoa->nome_razao }}
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sobrenome ou Nome Fantasia:</strong>
                {{ $pessoa->sobre_fantasia }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cep:</strong>
                {{ $pessoa->cep }}
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Logradouro:</strong>
                {{ $pessoa->logradouro }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numero:</strong>
                {{ $pessoa->numero }}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Complemento:</strong>
                {{ $pessoa->complemento }}
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bairro:</strong>
                {{ $pessoa->bairro }}
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cidade:</strong>
                {{ $pessoa->cidade }}
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Uf:</strong>
                {{ $pessoa->uf }}
            </div>
        </div>


    </div>
@endsection