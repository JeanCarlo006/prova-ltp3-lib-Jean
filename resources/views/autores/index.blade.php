@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Lista de Autores</h2>
        <a href="{{ route('autores.create') }}" class="btn btn-primary">+ Novo Autor</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Nacionalidade</th>
                <th style="width: 180px;">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($autores as $autor)
            <tr>
                <td>{{ $autor->id }}</td>
                <td><strong>{{ $autor->nome }}</strong></td>
                <td>{{ $autor->nacionalidade }}</td>
                <td>
                    <div style="display: flex; gap: 6px;">
                        <a href="{{ route('autores.edit', $autor) }}" class="btn btn-outline">
                            Editar
                        </a>

                        <form action="{{ route('autores.destroy', $autor) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir o autor «{{ $autor->nome }}»?')">
                                Excluir
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" style="text-align: center; color: #718096; padding: 20px;">
                    Nenhum autor cadastrado até o momento.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection