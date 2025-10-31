@extends('layouts.app')

@section('content')
<h2>Detalhes do Produto</h2>
<div class="card">
    <div class="card-body">
        <p><strong>ID:</strong> {{ $produto->id }}</p>
        <p><strong>Descrição:</strong> {{ $produto->descricao }}</p>
        <p><strong>Quantidade:</strong> {{ $produto->qtd }}</p>
        <p><strong>Preço Unitário:</strong> R$ {{ number_format($produto->precoUnitario, 2, ',', '.') }}</p>
        <p><strong>Preço de Venda:</strong> R$ {{ number_format($produto->precoVenda, 2, ',', '.') }}</p>
        <p><strong>Criado em:</strong> {{ $produto->created_at->format('d/m/Y H:i') }}</p>
    </div>
</div>
<a href="{{ route('produtos.index') }}" class="btn btn-primary mt-3">Voltar</a>
@endsection