
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
                    <h2></h2>

                </div>
            </section>
            <!-- Final Breadcrumbs -->

            <!-- ======= Seção Blog ======= -->
            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up">

                    <div class="row">

                        <div class="col-lg-8 entries">

                            <article class="entry entry-single">

                                <div class="entry-img">
                                    <img src="assets/img/blog/mordida.jpg" alt="" class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a href="artigo-blog.html">Um animal de rua me mordeu. O que devo fazer?</a>
                                </h2><br>

                                <div class="entry-content">
                                    <p>
                                        Quem realiza resgates animais provavelmente já foi mordido por um animal de rua. Mas também pode acontecer de um cachorro que fugiu de casa e está assustado ou mesmo se você, assim como eu, não pode ver um bichinho na rua que já para fazer um carinho. Mas o que fazer quando um animal desconhecido te morde?
                                    </p>

                                    <p>
                                        Um amiga esses dias estava toda plena caminhando pela rua quando do nada surgiu um cachorro e deu-lhe uma mordida na perna! Que susto! Ela estava de calça jeans, que foi o que a salvou de um ferimento ainda maior. Passado o susto, ficou o questionamento: e agora? Vacina antirrábica é sempre na barriga? Se o cachorro estiver vacinado, eu preciso me vacinar também? Além da antirrábica, preciso de outros cuidados?
                                    </p>

                                    <h3>Primeiros Socorros</h3><br>
                                    <p>
                                        Bom, vamos entender primeiro alguns tipos de ferimentos, de acordo com o site preveniremcasa.com para entender os processos de primeiros socorros de cada um:</p>

                                    <p>Lesão leve – não sangra e causa apenas arranhões; essas são menos preocupantes.</p>
                                    <p>Perfuração – não importa que seja superficial ou profunda, neste caso a ferida começa a sangrar e fica sujeita a infecção devido às várias bactérias presentes na saliva do animal.</p>
                                    <p>Esmagamento ou dilaceração – geralmente estes tipos de feridas são causadas por animais de grande porte e que possuem bastante força no maxilar; podem resultar em lesões internas e fraturas externas além de apresentarem o risco de infecções.</p>

                                    <p>Em caso de lesões leves ou mesmo perfuração você deve lavar a área afetada com água e sabão por 5 minutos ou mais. Caso o sangramento não cesse, vá de imediato a um pronto atendimento, pois provavelmente será necessário uns pontinhos.</p>

                                    <p>Em caso de esmagamento ou dilaceração, pressione o ferimento com uma toalha limpa e vá de imediato a um pronto atendimento.</p><br>

                                    <img src="assets/img/blog/mordida.jpg" class="img-fluid" alt="">

                                    <h3>Por que preocupar-se com a Raiva?</h3><br>
                                    <p>
                                        A raiva é uma doença infecciosa viral aguda, que atinge humanos e animais mamíferos e caracteriza-se como uma encefalite progressiva e aguda com letalidade de aproximadamente 100%. É causada pelo Vírus do gênero Lyssavirus, da família Rhabdoviridae.
                                    </p>
                                    <p>
                                        A doença é transmitida ao homem pela saliva de animais infectados, principalmente por meio da mordedura, podendo ser transmitida também pela arranhadura e/ou lambedura desses animais.
                                    </p>
                                    <p>
                                        O período de incubação é variável entre as espécies, desde dias até anos, com uma média de 45 dias no ser humano, podendo ser mais curto em crianças.
                                    </p>
                                    <p>
                                        Nos cães e gatos, a eliminação de vírus pela saliva ocorre de 2 a 5 dias antes do aparecimento dos sinais clínicos e persiste durante toda a evolução da doença (período de transmissibilidade). A morte do animal acontece, em média, entre 5 e 7 dias após a apresentação dos sintomas.
                                    </p>
                                    <p>
                                        A raiva é uma doença quase sempre fatal, então a melhor medida de prevenção é a vacinação pré ou pós exposição.</p>

                                </div>

                                <div class="entry-footer">
                                    <i class="bi bi-folder"></i>
                                    <ul class="cats">
                                        <li><a href="#">Cuidados</a></li>
                                    </ul>

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