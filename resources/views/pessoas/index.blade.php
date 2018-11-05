@extends('pessoas.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD | Júlio Vilela</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pessoas.create') }}"> Adicionar</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('sucesso'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Pessoa</th>
            <th>Nome</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($pessoas as $pessoa)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pessoa->tipo }}</td>
            <td>{{ $pessoa->nome_razao }}</td>
            <td>
                <form action="{{ route('pessoas.destroy',$pessoa->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('pessoas.show',$pessoa->id) }}">Ver</a>
    
                    <a class="btn btn-primary" href="{{ route('pessoas.edit',$pessoa->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $pessoas->links() !!}
      
@endsection