<h1>@section('title', 'SI')</h1>
<select>
@foreach ($options as $options)
   
        <options>{{$options}}</options>
  
  @endforeach
  </select>
  <a href="administrador/logout"><button class="btn btn-primary"> logout </button></a>
  