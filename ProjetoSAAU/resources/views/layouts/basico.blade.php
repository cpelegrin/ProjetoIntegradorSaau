    <!-- Head-->
    @include('layouts.partes-da-pagina.head')
    <!-- Head-->

    <body>

        <!-- ======= Sessão Barra Topo ======= -->
        @include('layouts.partes-da-pagina.barra-topo')
        <!-- ======= Final Sessão Barra Topo ======= -->
        <!-- ======= Cabeçalho ======= -->
        @include('layouts.partes-da-pagina.cabecalho')
        <!-- Final Cabeçalho -->
        @yield('conteudo')
        <!-- ======= Rodapé ======= -->
        @include('layouts.partes-da-pagina.rodape')
        <!-- ======= Rodapé ======= -->

    </body>

    </html>