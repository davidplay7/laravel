@extends('layouts.main')

@section('title', 'David Play')
@section('content')
<a href="https://meu-portifolio-sepia.vercel.app/#" target="_blank"><img src="img/projeto.png" alt="foto do projeto"></a> {{--fica na pasta public--}}  
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
    <a href="\products">CRUD</a>
@endsection