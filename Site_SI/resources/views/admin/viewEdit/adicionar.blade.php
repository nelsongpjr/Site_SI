@extends('admin.administrador')



@section('admin')
    <div class="row">
        {!! Form::open(array('url' => 'administrador/adicionar','data-abide','enctype'=>'multipart/form-data')) !!}
        {{--{!! Form::open(array('action' => 'controllerAdministrador@adicionar'.$dataType,'data-abide','enctype'=>'multipart/form-data')) !!}--}}
        @if ($dataType == 'egresso' || $dataType =='docente')
            {!! Form::label('nome','Nome:') !!}
            {!! Form::text('nome',null,array_merge(['required'=>'required', 'placeholder'=>'Nome']))!!}
        @else
            {!! Form::label('titulo','Título:') !!}
            {!! Form::text('titulo',null,array_merge(['required'=>'required', 'placeholder'=>'Título']))!!}
        @endif

        @if ($dataType == 'egresso' || $dataType =='docente' || $dataType == 'tgsi')
            {!! Form::label('descicao','Descricao:') !!}
            {!! Form::textarea('descricao',null,array_merge(['required'=>'required','id'=>'content']))!!}
        @elseif($dataType == 'noticia')
            {!! Form::label('noticia','Noticia:') !!}
            {!! Form::textarea('noticia',null,array_merge(['required'=>'required' ,'id'=>'content']))!!}
        @elseif($dataType == 'informacao')
            {!! Form::label('informacao','Informação:') !!}
            {!! Form::textarea('informacao',null,array_merge(['required'=>'required','id'=>'content']))!!}
        @endif

        @if ($dataType == 'tgsi')
            {!! Form::label('autor','Autor:') !!}
            {!! Form::text('autor',null,array_merge(['required'=>'required','placeholder'=>'Autor']))!!}
        @endif

            {!! Form::label('imagem', 'Imagem:') !!}
        {!! Form::file('image')!!}

        <label>Tornar imagem visível na galeria?
            {!! Form::checkbox('galeria', 'true', false) !!}
        </label>

        <br>

        {!! Form::label('anexo', 'Anexo:') !!}
        {!! Form::file('anexo') !!}

        {!! Form::hidden('dataType',$dataType) !!}
        {!! Form::hidden('imagens_id') !!}
        {!! Form::hidden('anexo_id') !!}
        {!! Form::hidden('admin_id') !!}


        <br><br>
        {!! Form::submit('Cadastrar',array_merge(['class'=>'success button'])) !!}

        {!! Form::close() !!}

    </div>

@endsection




