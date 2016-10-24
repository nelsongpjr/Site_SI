

@section('title', 'menuAdministrador')


<div class="title-bar" data-responsive-toggle="menuPrincipal" data-hide-for="large">
    <button class="menu-icon" type="button" data-toggle></button>
    <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar large-11 large-centered medium-11 medium-centered small-11 small-centered columns" id="menuPrincipal">
    <div class="top-bar-left">

        <ul class="dropdown menu" data-dropdown-menu role="navigation" aria-label="Pagination">
            <li><a aria-label="Page 1" href="{{url ('/administrador/noticias') }}">Noticia</a></li>
            <li><a aria-label="Page 2" href="{{url ('/administrador/informacoes') }}">Informação</a></li>
            <li><a aria-label="Page 3" href="{{url ('/administrador/egressos') }}">Egresso</a></li>
            <li><a aria-label="Page 4" href="{{url ('/administrador/docentes') }}">Docente</a></li>
            <li><a aria-label="Page 5" href="{{url ('/administrador/tgsis') }}">TGSI</a></li>
        </ul>

    </div>

    <div class="top-bar-right">
        <ul class="menu">
            <li><input type="search" placeholder="Pesquisar"></li>
            <li><button type="button" class="button">Pesquisar</button></li>
        </ul>

    </div>


</div>


