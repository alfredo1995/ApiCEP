@extends('adminlte::page');

@section('content')

    <div class="card card-default">
        <div class="card card-header">
            <a href="/cadastro/create"><input type="button" value="Cadastrar"></a>
        </div>

        <div class="card card-body table-responsive p-0">
            <table class="table table-sm table-houver table-nowrap">
                <thead>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>CEP</th>
                    <th>Endereço</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th>Testou</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    @foreach ($tabulador as $tabulador)
                        <tr>
                            <td>{{ $tabulador->id }}</td>
                            <td>{{ $tabulador->nome }}</td>
                            <td>{{ $tabulador->idade }}</td>
                            <td>{{ $tabulador->cep }}</td>
                            <td>{{ $tabulador->endereco }}</td>
                            <td>{{ $tabulador->cidade }}</td>
                            <td>{{ $tabulador->uf }}</td>
                            <td>{{ $tabulador->teste }}</td>
                            <td>                                
                                <form action="{{ route('cadastro.destroy', $tabulador->nome) }}" method="post">

                                    <a class="btn btn-warning" href="{{ route('cadastro.edit', $tabulador->id) }}">Editar</a>
                                    
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection