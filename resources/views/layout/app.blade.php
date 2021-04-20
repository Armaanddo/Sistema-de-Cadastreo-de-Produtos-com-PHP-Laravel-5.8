<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Cadastro de Produtos</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" charset="utf-8">
    <style>
        body {
            padding: 20px;
        }
        .navbar{
            margin: 20px;
        }

    </style>
</head>

<body>
    <div class="container">
        @component('componente_navbar', ["current" => $current])
            
        @endcomponent
        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>
    </div>
</body>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@hasSection ('javascript')
    @yield('javascript')
@endif
</html>
