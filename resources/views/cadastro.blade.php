@extends('adminlte::page');

@section('content')
<div>
    
    <form action="{{ route('cadastro.store') }}" method="post">
        @csrf
        <label for="">Nome</label>
        <div>
            <input type="text" name="nome">
        </div>
    
        <label for="">Idade</label>
        <div>
            <input type="number" name="idade">
        </div>
    
        <label for="">CEP</label>
        <div>
            <input type="text" name="cep" id="cep">
        </div>

        <label for="">Endereço</label>
        <div>
            <input type="text" name="endereco" id="logradouro">
        </div>

        <label for="">Cidade</label>
        <div>
            <input type="text" name="cidade" id="localidade">
        </div>
    
        <label for="">UF</label>
        <div>
            <input type="text" name="uf" id="uf">
        </div>
    
        <label for="">Teste</label>
        <div>
            <input type="text" name="teste">
        </div>

        <br>
        <input class="btn btn-success" type="submit" value="Cadastrar">
    </form>
    <script src="/api.js"> </script>
</div>
@endsection
