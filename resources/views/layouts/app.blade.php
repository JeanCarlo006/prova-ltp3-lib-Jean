<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca - IFTO</title>
    
    <!-- AQUI ESTÁ O VÍNCULO COM O SEU CSS -->
    <link rel="stylesheet" href="{{ asset('css/ifto.css') }}">
    
</head>
<body>

    <!-- Menu Superior Verde -->
    <nav class="navbar">
        <a href="/" class="navbar-brand">
            <div class="ifto-logo-square">
                <div class="ifto-square red"></div>
                <div class="ifto-square"></div>
                <div class="ifto-square"></div>
                <div class="ifto-square"></div>
                <div class="ifto-square"></div>
                <div class="ifto-square"></div>
                <div class="ifto-square"></div>
                <div class="ifto-square"></div>
                <div class="ifto-square"></div>
            </div>
            <span>Biblioteca IFTO</span>
        </a>

        <ul class="nav-links">
            <li><a href="{{ route('autores.index') }}">Autores</a></li>
            <li><a href="{{ route('livros.index') }}">Livros</a></li>
        </ul>
    </nav>

    <!-- Conteúdo Dinâmico das Telas -->
    <main class="container">
        @if (session('sucesso'))
            <div class="alert-success">
                {{ session('sucesso') }}
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Rodapé Institucional -->
    <footer class="footer">
        <p>Biblioteca - Instituto Federal do Tocantins (IFTO)</p>
    </footer>

</body>
</html>