<header>
    <div id="Titolo">
        {{-- cliccato riporta alla pagina Home  --}}
        <a href="{{route('pagina-home')}}">
            <h1> Sono l'Header </h1>
        </a>
    </div>

    <div class="main-menu">
        <nav>
            <ul>
                <li><a class="{{ Request::route()->getName() == 'pagina-home' ? 'active' :  ''}}" href="{{ route('pagina-home') }}">Homepage</a></li>
                <li><a class="{{ Request::route()->getName() == 'pagina-movies' ? 'active' :  ''}}" href="{{ route('pagina-movies') }}">Movies</a></li>
                <li><a class="{{ Request::route()->getName() == 'pagina-contatti' ? 'active' :  ''}}" href="{{ route('pagina-contatti') }}">Contatti</a></li>
                <li><a class="{{ Request::route()->getName() == 'pagina-about' ? 'active' :  ''}}" href="{{ route('pagina-about') }}">About Us</a></li>
            </ul>
        </nav>
    </div>
</header>