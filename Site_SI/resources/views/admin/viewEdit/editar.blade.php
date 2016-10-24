@extends('admin.administrador')

@section('title', 'noticia')

@section('admin')
    {!! Form::open(array('action' => 'controllerAdministrador@adicionarNoticias','data-abide')) !!}
    {!! Form::label('titulo','Titulo:') !!}
    {!! Form::text('titulo',null,array_merge(['required'=>'required']))!!}
    {!! Form::label('descicao','Descricao:') !!}
    {!! Form::textarea('descricao',null,array_merge(['required'=>'required']))!!}
    {!! Form::label('imagem', 'Imagem:') !!}
    {!! Form::file('image') !!}
    {!! Form::label('anexo', 'Anexo:') !!}
    {!! Form::file('anexo') !!}
    {!! Form::submit('Cadastrar') !!}
    {!! Form::close() !!}

    {{--


     <form action="{{url ('admin/viewEdit/editar')}}" method="get" xmlns="http://www.w3.org/1999/html">

         <div class="input-group">
             @if ($dataType == 'noticia' || $dataType =='tgsi' || $dataType == 'informacao')
                 <span class="input-group-label">Título:</span>
             @elseif( $dataType == 'egresso' || $dataType == 'docente')
                 <span class="input-group-label">Nome:</span>
             @endif
             <input class="input-group-field" type="text">
         </div>
         @if ($dataType == 'noticia')
             <span class="input-group-label">Notícia:</span>
         @elseif($dataType =='tgsi' || $dataType == 'egresso' || $dataType == 'docente')
             <span class="input-group-label">Descrição:</span>
         @elseif($dataType == 'informacao')
             <span class="input-group-label">Informação:</span>
         @endif

         <textarea cols="7" rows="7">

        </textarea>

         <input type="enctype">

         <div class="footer">
                 <button class="success button" type="action">Enviar</button>
         </div>

     </form>
 --}}
@endsection




