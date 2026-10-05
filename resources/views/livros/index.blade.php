@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Lista de Livros</h2>
        <a href="{{ route('livros.create') }}" class="btn btn-primary">+ Novo Livro</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Ano</th>
                <th>ISBN</th>
                <th style="width: 180px;">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($livros as $livro)
            <tr>
                <td>{{ $livro->id }}</td>
                <td><strong>{{ $livro->titulo }}</strong></td>
                <!-- Exibe o nome do autor buscando no relacionamento da Model -->
                <td>{{ $livro->autor->nome ?? 'Autor não informado' }}</td>
                <td>{{ $livro->ano_publicacao }}</td>
                <td>{{ $livro->isbn }}</td>
                <td>
                    <div style="display: flex; gap: 6px;">
                        <!-- Botão de Editar -->
                        <a href="{{ route('livros.edit', $livro) }}" class="btn btn-outline">
                            Editar
                        </a>

                        <!-- Formulário de Exclusão -->
                        <form action="{{ route('livros.destroy', $livro) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir o livro «{{ $livro->titulo }}»?')">
                                Excluir
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" style="text-align: center; color: #718096; padding: 20px;">
                    Nenhum livro cadastrado até o momento.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection