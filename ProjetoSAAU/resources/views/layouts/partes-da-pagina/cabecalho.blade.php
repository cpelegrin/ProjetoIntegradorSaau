<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
            <a href="index.html"><img src="assets/img/saau-logo.jpg" alt="Logo SAAU" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                @yield('inicio')
                
                <li><a class="@yield('')" href="#">EVENTOS</a></li>
                <li><a class="@yield('ativo-blog')" href="{{Route('blog')}}">NOTÍCIAS</a></li>
                <li><a class="@yield('')" href="#">LOJA</a></li>
                <li><a class="@yield('ativo-sobrenos')" href="{{Route('sobre-nos')}}">SOBRE NÓS</a></li>
                <li><a class="@yield('ativo-contato')" href="{{Route('contato')}}">CONTATO/DENÚNCIA</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

    </div>
</header>