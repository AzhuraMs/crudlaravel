@extends('layouts.app')

@section('content')
<a href="{{ route('produtos.create') }}" class="btn btn-primary mb-3">Novo Produto</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Qtd</th>
            <th>Preço Unitário</th>
            <th>Preço Venda</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produtos as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->descricao }}</td>
            <td>{{ $p->qtd }}</td>
            <td>R$ {{ number_format($p->precoUnitario, 2, ',', '.') }}</td>
            <td>R$ {{ number_format($p->precoVenda, 2, ',', '.') }}</td>
            <td>
                <a href="{{ route('produtos.show', $p->id) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('produtos.edit', $p->id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('produtos.destroy', $p->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Excluir?')">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection