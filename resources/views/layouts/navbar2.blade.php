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
                    <li class="nav-item"><a class="nav-link" href="{{ url('/feed') }}"><span class="linktext">Alimentar Sistema</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}"><span class="linktext">Consultar Dados</span></a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="{{ url('/myads') }}"><span class="linktext">Meus Anúncios</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><span class="linktext">Chat</span></a></li> --}}
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="{{ url('/user/profile') }}"><img src="{{ asset('assets/images/pessoa.svg') }}" style="width:30px; height:auto;" alt="perfil" />&nbsp;{{ Auth::user()->username }}</a>
                    </li>
                    <li class="nav-item" id="switch-ad-link">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <input onclick="event.preventDefault(); this.closest('form').submit();" class="cust-btn" type="button" name="logout" value="Sair" />
                        </form>
                    </li> <!-- Bad practice here: input inside a tag -->
                    {{-- <li class="nav-item" id="switch-ad-link2"><a class="nav-link" href="{{ url('/ad') }}"><span class="linktext"><strong>Anunciar</strong></span></a></li> --}}
                    <!--
                    <li class="nav-item">
                        <form enctype="multipart/form-data" action="" method="post">
                            <input class="cust-btn" type="submit" name="logout" value="SAIR" />
                        </form>
                    </li>
                    -->
                </ul>
            </div>
        </nav>
    </header>
