@extends('admin.administrador')

@section('title', 'noticia')

@section('admin')
    <table>
		<thead>
			<tr>
			<th>Id</th>
			<th>Nome</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($noticia as $noticia)
				
				<tr> 
						 <td><a href="#">{{ $noticia->id }} </a></td>
						 <td>{{ $noticia->titulo }}</td>
				</tr>
				 <td>	
	{!! Form::open(array('url' => 'foo/bar')) !!}
	{!! Form::submit('Excluir',['class'=>'button alert']) !!}
	{!! Form::close() !!}
 </td>

				 
			@endforeach
		</tbody>
</table>

@endsection




