@extends('layouts.app')

@section('content')
<!-- Título da Página Inicial -->
<div style="text-align: center; margin-bottom: 35px;">
    <h1 style="color: #006b2b; font-size: 2.2rem; margin-bottom: 8px;">Sistema de Biblioteca</h1>
    <p style="color: #718096; font-size: 1.1rem;">Painel de gestão de acervo e autores do IFTO</p>
</div>

<!-- Layout em Grelha com Cartões Estilizados -->
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
    
    <!-- Cartão Autores -->
    <div class="card" style="text-align: center; padding: 30px 24px;">
        <div style="font-size: 2.5rem; margin-bottom: 10px;">✍️</div>
        <h2 style="color: #006b2b; margin-bottom: 12px; font-size: 1.5rem;">Autores</h2>
        <p style="color: #4a5568; margin-bottom: 24px; min-height: 48px;">
            Gerencie os autores registados e adicione novos escritores ao acervo.
        </p>
        <a href="{{ route('autores.index') }}" class="btn btn-primary" style="display: inline-block; width: 100%; text-align: center;">
            Gerir Autores
        </a>
    </div>

    <!-- Cartão Livros -->
    <div class="card" style="text-align: center; padding: 30px 24px;">
        <div style="font-size: 2.5rem; margin-bottom: 10px;">📚</div>
        <h2 style="color: #006b2b; margin-bottom: 12px; font-size: 1.5rem;">Livros</h2>
        <p style="color: #4a5568; margin-bottom: 24px; min-height: 48px;">
            Consulte, edite e gira o catálogo completo de livros da biblioteca.
        </p>
        <a href="{{ route('livros.index') }}" class="btn btn-primary" style="display: inline-block; width: 100%; text-align: center;">
            Gerir Livros
        </a>
    </div>

</div>
@endsection