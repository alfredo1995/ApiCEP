@extends('adminlte::page');

@section('content')
<div>
    
    <form action="" method="post">
        @csrf
        @method('PUT')

        <label for="">Nome</label>
        <div>
            <input type="text" name="nome" value="{{ $tabulador->nome }}">
        </div>
    
        <label for="">Idade</label>
        <div>
            <input type="number" name="idade" value="{{ $tabulador->idade }}">
        </div>
    
        <label for="">CEP</label>
        <div>
            <input type="text" name="cep" value="{{ $tabulador->cep }}">
        </div>

        <label for="">Endereço</label>
        <div>
            <input type="text" name="endereco" value="{{ $tabulador->endereco }}">
        </div>

        <label for="">Cidade</label>
        <div>
            <input type="text" name="cidade" value="{{ $tabulador->cidade }}">
        </div>
    
        <label for="">UF</label>
        <div>
            <input type="text" name="uf" value="{{ $tabulador->uf }}">
        </div>
    
        <label for="">Teste</label>
        <div>
            <input type="text" name="teste" value="{{ $tabulador->teste }}">
        </div>

        <br>
        <input class="btn btn-success" type="submit" value="Salvar">
    </form>
</div>
@endsection
