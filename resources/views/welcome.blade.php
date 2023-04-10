<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Scripts -->
        <script type="text/javascript" src="js/script.js"></script>
    </head>
    <body class="antialiased">
        <img src="img/projeto.png" alt="foto do projeto">
        @if(10>5)
        <p>Verdade</p>
        @endif
    <p> {{ $nome }}</p>
    @for($i = 0; $i < count($arr); $i++)
        <p>{{$arr[$i]}}</p>
    @endfor
    {{--comentario oculto--}}
    <!--comentario aparece no inspesionar-->
    @foreach($contatos as $contato)
                <p>{{
                    $loop->index
                }}
                </br>
                {{
                    $contato

                    }}</p>
    @endforeach





</body>
   
</html>
