@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Editar Autor</h2>
    </div>

    <form action="{{ route('autores.update', $autor) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ old('nome', $autor->nome) }}" class="form-control">
            @error('nome')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="nacionalidade">Nacionalidade:</label>
            <input type="text" id="nacionalidade" name="nacionalidade" value="{{ old('nacionalidade', $autor->nacionalidade) }}" class="form-control">
            @error('nacionalidade')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div style="display: flex; gap: 10px; margin-top: 24px;">
            <button type="submit" class="btn btn-primary">Atualizar Autor</button>
            <a href="{{ route('autores.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </form>
</div>
@endsection