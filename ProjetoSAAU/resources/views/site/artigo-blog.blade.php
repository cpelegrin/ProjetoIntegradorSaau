
<body>
    <!--Titulo da pagina--->
    @section('title','SAAU - Nome Artigo')
    <!-- ============== -->

    <!--Inclusão do link inicio no menu--->
    @section('inicio')
        <li><a href="{{Route('inicio')}}">INICIO</a></li>
    @endsection

    
    <!-- ============== -->

    @extends('layouts.basico')
    @section('conteudo')
        <main id="main">

            <!-- ======= Breadcrumbs ======= -->
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">

                    <ol>
                        <li><a href="index.html">Início</a></li>
                        <li><a href="blog.html">Notícias</a></li>
                    </ol>
                    <h2>Notícias</h2>

                </div>
            </section>
            <!-- Final Breadcrumbs -->

            <!-- ======= Seção Blog ======= -->
            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up">

                    <div class="row">

                        <div class="col-lg-8 entries">

                            <article class="entry entry-single">

                                <div class="entry-img"  style="width: auto; height: auto;">
                                    <img style="width: 100%;" class="text-center" src="{{url('storage/'. $noticia->image)}}" >
                                </div>

                                <h2 class="entry-title">
                                    <a href="artigo-blog.html">{{$noticia->titulo}}</a>
                                </h2><br> 


                                <div class="entry-content">
                                    <p>
                                    @php

                                    echo "{$noticia->corpo}";

                                    @endphp
                                    </p>
                                </div>

                                <div class="entry-footer">
                                    <small><br>Atualizada em: {{Carbon::parse($noticia->updated_at)->locale('br')->format('d/m/Y - H:i')."hrs"}}</small>

                                </div>

                            </article>
                            <!-- Final Blog -->

                        </div>

                        <div class="col-lg-4">

                            <div class="sidebar">

                                <h3 class="sidebar-title">Procurar:</h3>
                                <div class="sidebar-item search-form">
                                    <form action="">
                                        <input type="text">
                                        <button type="submit"><i class="bi bi-search"></i></button>
                                    </form>
                                </div><!-- Final Sidebar Formulario Buscar-->

                                <h3 class="sidebar-title">Categorias:</h3>
                                <div class="sidebar-item categories">
                                    <ul>
                                        <li><a href="#">Gatos <span>(1)</span></a></li>
                                        <li><a href="#">Cachorros <span>(4)</span></a></li>
                                        <li><a href="#">Estilo de Vida <span>(2)</span></a></li>
                                        <li><a href="#">Educação <span>(6)</span></a></li>
                                        <li><a href="#">Cuidados <span>(3)</span></a></li>
                                    </ul>
                                </div>
                                <!-- Final Sidebar Categorias-->

                                <h3 class="sidebar-title mb-4">Postagens Recentes:</h3>
                                <div class="sidebar-item recent-posts">
                                    
                                    @foreach ($front as $noticias)

                                    <div class="post-item clearfix">
                                        <a href="{{route('mostrar_noticia',['id'=>$noticias->id])}}"><img class="mb-3" src="@if(isset($noticia->image)){{url('storage/'. $noticias->image)}}@else assets/img/blog/mordida.jpg @endif"alt="" class="img-fluid  text-center mt-3" alt=""></a> <h4><a href="{{route('mostrar_noticia',['id'=>$noticias->id])}}"> {{$noticias -> titulo}}</a></h4>
                                       
                                    </div>
                                    @endforeach

                                </div>

                            </div>
                            <!-- Final Sidebar -->

                        </div>
                        <!-- Final Blog Sidebar -->

                    </div>

                </div>
            </section>

        </main>
        <!-- Final #main -->
    @endsection('conteudo')
    

</body>

</html>