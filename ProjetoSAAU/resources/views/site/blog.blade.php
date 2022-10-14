<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SAAU - Notícias</title>
    <meta content="A SAAU atua na proteção dos animais, recolhendo e cuidando dos animais abandonados e vítimas de maus-tratos." name="description">
    <meta content="adocao,protecao animal,doacao," name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    @section('inicio')
        <li><a href="{{Route('inicio')}}">INICIO</a></li>
    @endsection
    
    @section('ativo-blog','active')

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

                            <article class="entry">

                                <div class="entry-img">
                                    <img src="assets/img/blog/mordida.jpg" alt="" class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a href="artigo-blog.html">Título da Postagem 1</a>
                                </h2>

                                <div class="entry-content">
                                    <p>
                                        Aqui fica um resumo da notícia.
                                    </p>
                                    <div class="read-more">
                                        <a href="artigo-blog.html">Continue Lendo...</a>
                                    </div>
                                </div>

                            </article><!-- Entrada Sessão Blog  -->

                            <article class="entry">

                                <div class="entry-img">
                                    <img src="assets/img/blog/mordida.jpg" alt="" class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a href="artigo-blog.html">Título da Postagem 2</a>
                                </h2>

                                <div class="entry-content">
                                    <p>
                                        Aqui fica um resumo da notícia
                                    </p>
                                    <div class="read-more">
                                        <a href="artigo-blog.html">Continue Lendo...</a>
                                    </div>
                                </div>

                            </article><!-- Entrada Sessão Blog -->

                            <article class="entry">

                                <div class="entry-img">
                                    <img src="assets/img/blog/mordida.jpg" alt="" class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a href="artigo-blog.html">Título da Postagem 3</a>
                                </h2>

                                <div class="entry-content">
                                    <p>
                                        Aqui fica um resumo da notícia
                                    </p>
                                    <div class="read-more">
                                        <a href="artigo-blog.html">Continue Lendo...</a>
                                    </div>
                                </div>

                            </article><!-- Entrada Sessão Blog  -->

                            <article class="entry">

                                <div class="entry-img">
                                    <img src="assets/img/blog/mordida.jpg" alt="" class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a href="artigo-blog.html">Título da Postagem 4</a>
                                </h2>

                                <div class="entry-content">
                                    <p>
                                        Aqui fica um resumo da notícia
                                    </p>
                                    <div class="read-more">
                                        <a href="artigo-blog.html">Continue Lendo...</a>
                                    </div>
                                </div>

                            </article><!-- Entrada Sessão Blog  -->

                            <div class="blog-pagination">
                                <ul class="justify-content-center">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                </ul>
                            </div>

                        </div><!-- Final lista entrada blog -->

                        <div class="col-lg-4">

                            <div class="sidebar">

                                <h3 class="sidebar-title">Procurar:</h3>
                                <div class="sidebar-item search-form">
                                    <form action="">
                                        <input type="text">
                                        <button type="submit"><i class="bi bi-search"></i></button>
                                    </form>
                                </div><!-- Final formulário de pesquisa-->

                                <h3 class="sidebar-title">Categorias:</h3>
                                <div class="sidebar-item categories">
                                    <ul>
                                        <li><a href="#">Gatos <span>(1)</span></a></li>
                                        <li><a href="#">Cachorros <span>(4)</span></a></li>
                                        <li><a href="#">Estilo de Vida <span>(2)</span></a></li>
                                        <li><a href="#">Educação <span>(6)</span></a></li>
                                        <li><a href="#">Cuidados <span>(3)</span></a></li>
                                    </ul>
                                </div><!-- Final sidebar categorias-->

                                <h3 class="sidebar-title">Postagens Recentes:</h3>
                                <div class="sidebar-item recent-posts">
                                    <div class="post-item clearfix">
                                        <img src="assets/img/blog/mordida.jpg" alt="">
                                        <h4><a href="blog-single.html">Título da Postagem</a></h4>
                                    </div>

                                    <div class="post-item clearfix">
                                        <img src="assets/img/blog/mordida.jpg" alt="">
                                        <h4><a href="blog-single.html">Título da Postagem</a></h4>
                                    </div>

                                    <div class="post-item clearfix">
                                        <img src="assets/img/blog/mordida.jpg" alt="">
                                        <h4><a href="blog-single.html">Título da Postagem</a></h4>
                                    </div>

                                    <div class="post-item clearfix">
                                        <img src="assets/img/blog/mordida.jpg" alt="">
                                        <h4><a href="blog-single.html">Título da Postagem</a></h4>
                                    </div>

                                    <div class="post-item clearfix">
                                        <img src="assets/img/blog/mordida.jpg" alt="">
                                        <h4><a href="blog-single.html">Título da Postagem</a></h4>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </section>

        </main>
    @endsection('conteudo')
    
</body>

</html>