<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body>
    @if ($current != 'error')
        @component('componentes.navbar', ['current' => $current])
        @endcomponent
    @endif
    <main role="main">
        <div class="row teste">
            @hasSection('body')
                @yield('body')
            @endif

        </div>
    </main>

</body>

</html>
