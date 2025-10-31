@extends('layouts.app')

@section('content')
<h2>Editar Produto</h2>
<form action="{{ route('produtos.update', $produto->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descricao" value="{{ $produto->descricao }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Quantidade</label>
        <input type="number" name="qtd" value="{{ $produto->qtd }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Preço Unitário</label>
        <input type="number" step="0.01" name="precoUnitario" value="{{ $produto->precoUnitario }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Preço de Venda</label>
        <input type="number" step="0.01" name="precoVenda" value="{{ $produto->precoVenda }}" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Atualizar</button>
    <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection