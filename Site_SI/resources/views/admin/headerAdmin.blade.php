

<header>
    <div class="large-12 medium-12 small-12 columns">
        <div data-sticky-container>
            <div class="title-bar" data-sticky data-options="marginTop:0;" style="width:100%" data-top-anchor="1" data-btm-anchor="content:bottom">
                <a class="menu-text top-bar-title" href="{{ url('/administrador') }}">
                    Sistemas de Informação/UFSM-FW
                </a>
                @if (Auth::guest())
                    <div class="top-bar-right">
                        <a class="menu-text left" href="{{ url('/' )}}"> Pagina inicial </a>
                    </div>
                @else
                    <div class="top-bar-right" data-responsive-toggle="logOut" data-hide-for="medium">
                        <button class="menu-icon" type="button" data-toggle></button>
                        <div class="title-bar-title">Logout</div>
                    </div>
                    <div class="top-bar-right" id="logOut">
                        <a class="menu-text" href="{{ url('/logout')}}"> Logout </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</header>
