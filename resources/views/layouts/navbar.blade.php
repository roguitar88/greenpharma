    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-white" id="navbar">
            <div class="row" style="display:inline-block;">
            <a class="navbar-brand" href="/"><img id="img" alt="Olimppi.us" src="{{ asset('assets/images/minhalogo.png') }}"/></a> <!-- style="width:20%; height:auto; float:left; margin-top:-28px;" -->
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarMenu"> <!-- id="navbarMenu" -->
                <ul class="navbar-nav"> <!-- id="nav-ul" -->
                    <li class="nav-item"><a class="nav-link" href="#"><span class="linktext">Buscar</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">LOGIN</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/register') }}">CADASTRO</a></li>
                </ul>
            </div>
        </nav>
    </header>
