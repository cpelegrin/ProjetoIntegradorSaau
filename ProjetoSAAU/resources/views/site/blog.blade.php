<body>
    <!--Titulo da pagina--->
    @section('title','SAAU - Notícias')
    <!-- ============== -->

    <!--Inclusão do link inicio no menu--->
    @section('inicio')
    <li><a href="{{Route('inicio')}}">INICIO</a></li>
    @endsection
    <!-- ============== -->

    <!--Inclusão da classe ativo no link do menu--->
    @section('ativo-blog','active')
    <!-- ============== -->

    @extends('layouts.basico')
    @section('conteudo')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.html">Início</a></li>
                    <li>Blog</li>
                </ol>
                <h2>Notícias</h2>

            </div>
        </section><!-- Final Breadcrumbs -->

        <!-- ======= Sessão Blog ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        @foreach ($front as $noticia)

                        <article class="entry">

                            <div class="entry-img">
                                <img src="assets/img/blog/mordida.jpg" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="Mudar para route para controller show passando o noticia->id">{{$noticia->titulo}}</a>
                            </h2>

                            <div class="entry-content">
                                <p>
                                    {{$noticia->resumo}}
                                </p>
                                <div class="read-more">
                                    <a href="Mudar para route para controller show passando o noticia->id">Continue Lendo...</a>
                                </div>
                            </div>
                        </article><!-- Entrada Sessão Blog  -->
                        @endforeach
                        <div class="blog-pagination">
                            <ul class="justify-content-center">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul>
                        </div>

                    </div><!-- Final lista entrada blog -->

                    <div class="col-lg-4">

                    </div>

                </div>

            </div>
        </section>

    </main>
    @endsection('conteudo')

</body>

</html>