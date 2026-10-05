@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Cadastrar Livro</h2>
    </div>

    <form action="{{ route('livros.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" value="{{ old('titulo') }}" class="form-control" placeholder="Digite o título do livro">
            @error('titulo')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="ano_publicacao">Ano de Publicação:</label>
            <input type="number" id="ano_publicacao" name="ano_publicacao" value="{{ old('ano_publicacao') }}" class="form-control" placeholder="Ex: 2024">
            @error('ano_publicacao')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="isbn">ISBN:</label>
            <input type="text" id="isbn" name="isbn" value="{{ old('isbn') }}" class="form-control" placeholder="Digite o código ISBN">
            @error('isbn')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="autor_id">Autor:</label>
            <select id="autor_id" name="autor_id" class="form-control">
                <option value="">Selecione um Autor</option>
                @foreach ($autores as $autor)
                    <option value="{{ $autor->id }}" {{ old('autor_id') == $autor->id ? 'selected' : '' }}>
                        {{ $autor->nome }}
                    </option>
                @endforeach
            </select>
            @error('autor_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div style="display: flex; gap: 10px; margin-top: 24px;">
            <button type="submit" class="btn btn-primary">Salvar Livro</button>
            <a href="{{ route('livros.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </form>
</div>
@endsection