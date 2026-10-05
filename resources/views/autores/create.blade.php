@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Cadastrar Autor</h2>
    </div>

    <form action="{{ route('autores.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ old('nome') }}" class="form-control" placeholder="Digite o nome completo do autor">
            @error('nome')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="nacionalidade">Nacionalidade:</label>
            <input type="text" id="nacionalidade" name="nacionalidade" value="{{ old('nacionalidade') }}" class="form-control" placeholder="Ex: Brasileira">
            @error('nacionalidade')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div style="display: flex; gap: 10px; margin-top: 24px;">
            <button type="submit" class="btn btn-primary">Salvar Autor</button>
            <a href="{{ route('autores.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </form>
</div>
@endsection