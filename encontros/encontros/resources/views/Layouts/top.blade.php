<!doctype html>
<html lang="en">
<head>
    <title>Proex Bolsas</title>
    <meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type"/>
    <!--		Styles			-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/crumbs.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/topEncontros.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/encontros.css')}}" type="text/css">

    <!--		Fim Styles		-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js?v=1.11.2"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @yield('styles')

</head>

<body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(  function(){ escondeMsg(); }  ,  30000 )
    }, true);

    function escondeMsg(){
        var div  = document.getElementById('msg');
        div.style.display='none';
    }
</script>
<header>
    <div class="pull-right dados">
        @include(Config::get('sgiauthorizer.view.loggedUserView'))
    </div>

    <div class="wrapper">

        <img src="{{ asset('img/proex.png') }}" alt="Logo" height="80" width="80">
        <nav>
            <ul>

                <li><a href="{{ route('inicio') }}">INÍCIO</a></li>

                <li><a href="{{ route('contato.create') }}">CONTATO</a></li>

                @if(Auth::check())
                    <li class="pull-right">
                        <div class="dropdown">
                            <a class=" dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                GERENCIAR  <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li class="dropdown-item"><a class="txtsm" href="{{ url('/') }}">ESTATÍSTICAS</a></li>
                                <li class="dropdown-item"><a href="{{ url('/') }}">EDITAIS</a></li>
                            </ul>
                        </div>
                    </li>
                @endif

            </ul>

        </nav>

    </div>
</header>

<div class="conteudo">

    <div id="msg">
        @if((session('message')) !== null)
            <div class="alert alert-info">
                <ul>
                    @foreach(session()->pull('message','') as $message)
                        <li>{{$message}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    @yield('content')

</div>

<footer>
    <b>
        Núcleo de tecnologia da informação<br>
        PROEX<br>
        qualquer outra coisa
    </b>
</footer>

<!--		Scripts			-->


@yield('scripts')

<!--        Fim Scripts     -->

</body>
</html>