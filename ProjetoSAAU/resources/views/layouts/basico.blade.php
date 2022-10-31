<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAAU - UMUARAMA</title>
</head>

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