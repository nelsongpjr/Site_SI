

@section('title', 'menuAdministrador')


<div class="title-bar" data-responsive-toggle="menuPrincipal" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle></button>
    <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar large-11 large-centered medium-11 medium-centered small-11 small-centered columns" id="menuPrincipal">
    <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
            <li class="active "><a href="{{url ('/administrador/noticia') }}">Noticia</a></li>
            <li><a href="{{url ('/administrador/informacao') }}">Informação</a></li>
            <li><a href="{{url ('/administrador/egresso') }}">Egresso</a></li>
            <li><a href="{{url ('/administrador/docente') }}">Docente</a></li>
            <li><a href="{{url ('/administrador/tgsi') }}">TGSI</a></li>
        </ul>
    </div>
    <div class="top-bar-right">
            <ul class="menu">
                <li><input type="search" placeholder="Pesquisar"></li>
                <li><button type="button" class="button">Pesquisar</button></li>
            </ul>
    </div>
</div>


