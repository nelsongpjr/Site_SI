@extends('admin.administrador')

@section('title', 'noticia')

@section('admin')
    <div class="top-bar">
        <div class="top-bar-right">
            <a class="success button" href="{{url('administrador/adicionar/'.$dataType)}}">Adicionar</a>

        </div>

    </div>
    <table>
        <thead>
        <tr>
            @if ($dataType == 'noticia' || $dataType =='tgsi' || $dataType =='informacao'  )
                <th>Titulo</th>
            @else
                <th>Nome</th>
            @endif
        </tr>

        </thead>
        <tbody>
        @foreach ($dados as $dado)

            <tr>
                @if ($dataType == 'noticia' || $dataType =='tgsi' || $dataType =='informacao'  )
                    <td><a>{{ $dados->titulo }}</a></td>
                @else
                    <td><a>{{ $dados->nome }}</a></td>
                @endif

            </tr>

        @endforeach
        </tbody>
    </table>



@endsection




