@extends('layouts.app')

@section('content')
<h2>Criar Produto</h2>
<form action="{{ route('produtos.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descricao" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Quantidade</label>
        <input type="number" name="qtd" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Preço Unitário</label>
        <input type="number" step="0.01" name="precoUnitario" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Preço de Venda</label>
        <input type="number" step="0.01" name="precoVenda" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection