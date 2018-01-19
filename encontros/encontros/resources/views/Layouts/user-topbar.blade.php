<span  style="float: right;">
        @if(Auth::check())
            Usuário:
            <a href="{{ url(Config::get('sgiauthorizer.app.userInfoRoute')) }}" id="nomeHeader" class="btn btn-default btn-sm">
                {{Auth::user()->nome}}
            </a>
            <a href="{{ url('logout') }}" id="sair" class="btn btn-danger btn-sm">
                Sair
            </a>
        @else
            Iniciar sessão:
            <a href="{{ url(Config::get('sgiauthorizer.app.loginRoute')) }}" id="login" class="btn btn-success">
                Login
            </a>
        @endif


</span>