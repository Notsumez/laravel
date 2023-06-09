<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
    </head>
    <body class="antialiased">
        <h1>Algum Titulo</h1>
        <!-- O Laravel tem suas próprias estruturas, como if, for, etc... -->
        @if(10 > 5)
            <p>A condição é true</p>
        @endif

        <p>{{ $nome }}</p>

        @if($nome == "Pedro")
            <p>O nome é pedro</p>
        @elseif($nome == "Andrey")
            <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos</p>
        @else 
            <p>O nome não é Pedro</p>
        @endif
    </body>
</html>
