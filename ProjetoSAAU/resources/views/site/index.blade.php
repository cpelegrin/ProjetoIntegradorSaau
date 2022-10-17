
<body>
    <!--Titulo da pagina--->
    @section('title','SAAU - Umuarama')
    <!-- ============== -->
   
    @extends('layouts.basico')
    @section('conteudo')
        <!-- ======= Seção Herói ======= -->
        <section id="hero">
            <div class="hero-container">
                <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                    <div class="carousel-inner" role="listbox">

                        <!-- Slide 1 -->
                        <div class="carousel-item active" style="background-image: url(assets/img/slide/slideA.jpg)">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2 class="animate__animated animate__fadeInDown">Bem vindo(a) a <span>SAAU</span></h2>
                                    <h3 class="animate__animated animate__fadeInUp">ADOTAR UM PET É UM ATO DE AMOR AOS ANIMAIS.</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item" style="background-image: url(assets/img/Cachorro.jpg)">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2 class="animate__animated fanimate__adeInDown">Adote um<span> CACHORRO</span></h2>
                                    <h3 class="animate__animated animate__fadeInUp">CACHORROS SÃO GARANTIA DE BOAS RISADAS E DE MELHORIA NA VIDA SOCIAL.</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="carousel-item" style="background-image: url(assets/img/Gato.jpg)">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2 class="animate__animated animate__fadeInDown">Adote um<span> GATO</span></h2>
                                    <h3 class="animate__animated animate__fadeInUp">GATOS SÃO BOAS COMPANHIAS PARA TODOS OS PERFIS DE PESSOAS.</h3>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="Anterior">
                        <span class="carousel-control-prev-icon bi bi-chevron-bar-left" aria-hidden="true"></span>
                    </a>

                    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="Próximo">
                        <span class="carousel-control-next-icon bi bi-chevron-bar-right" aria-hidden="true"></span>
                    </a>

                </div>
            </div>
        </section>
        <!-- Final Seção Herói -->

        <main id="main">

            <!-- ======= Sessão Destaque ======= -->
            <section id="featured" class="featured">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="icon-box">
                                <i class="bi bi-coin"></i>
                                <h3><a href="">FAÇA UMA DOAÇÃO</a></h3>
                                <p>Precisamos manter o local e contratar profissionais que possam se dedicar a dar todo o atendimento que os protetores e adotantes merecem.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-4 mt-lg-0">
                            <div class="icon-box">
                                <i class="bi bi-person-hearts"></i>
                                <h3><a href="">ADOTE UM PET</a></h3>
                                <p>Nesse exato momento, existem milhares de doguinhos e gatinhos esperando um humano para chamar de seu.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-4 mt-lg-0">
                            <div class="icon-box">
                                <i class="bi bi-shield-fill-check"></i>
                                <h3><a href="">JUNTE-SE A NÓS</a></h3>
                                <p>Seja um voluntário e ajude os cães e gatos a terem um lar.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- Final Seção Destaque -->


            <!-- ======= Seção Patrocindores Master ======= -->
            <div class="section-title">
                <h2>Patrocinadores Master</h2>
            </div>

            <section id="services" class="services">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <img src="https://fakeimg.pl/400x400/" class="rounded" alt="...">
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                            <img src="https://fakeimg.pl/400x400/" class="rounded" alt="...">
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                            <img src="https://fakeimg.pl/400x400/" class="rounded" alt="...">
                        </div>

                    </div>

                </div>
            </section><!-- Final Patrocindores Master -->

            <!-- ======= Seção Sobre Nós ======= -->
            <section id="about" class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="assets/img/sobre-nos.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3>Quem Somos Nós?</h3>
                            <p class="fst-italic">
                                A <strong>SAAU</strong> atua na proteção dos animais, recolhendo e cuidando dos animais abandonados e vítimas de maus-tratos. A maior parte deles chegam até a instituição em estado crítico, com doenças, feridas, fêmeas prenhas, vítimas de atropelamentos e espancamentos.</p>
                            <p>Com muito trabalho, dedicação e amor, os voluntários da SAAU trabalham duro para salvar estes animais e lhes fornecer um pouco da dignidade tirada por pessoas da comunidade que não reconhecem o animal como um ser dotado de vida, que sente medo, frio, fome, dor e sofre como os humanos.
                            </p>
                            <p><strong>Precisamos principalmente de:</p>
                            <ul>
                                <li><i class="bi bi-check-all"></i> Ajuda com Ração;</li>
                                <li><i class="bi bi-check-all"></i> Ajuda Financeira;</li>
                                <li><i class="bi bi-check-all"></i> Ajuda com Remédios.</li>
                            </ul>
                            <p></strong>
                                Atualmente nós temos um canil, cujo terreno foi doado pela Prefeitura Municipal de Umuarama, juntamente com as primeiras instalações, e ampliamos conforme a necessidade e a ajuda dos voluntários e da comunidade.</p>
                            <p>A SAAU tem sobrevivido décadas graças à população que ajuda com doações, tanto de bens materiais, quanto do próprio tempo. Nós cuidamos principalmente de cães e gatos, e com poucos recursos nós fazemos o possível para não deixar estes seres indefesos desamparados.
                            </p>
                        </div>
                    </div>
                </div>
            </section><!-- Final Seção Sobre Nós -->

            <!-- ======= Seção Contagem ======= -->
            <section id="counts" class="counts">
                <div class="container">

                    <div class="row no-gutters">

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-journal-check"></i>
                                <span data-purecounter-start="0" data-purecounter-end="20000" data-purecounter-duration="3" class="purecounter"></span>
                                <p><strong>Pets Foram Cadastrados</strong> em nosso banco de dados.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-emoji-smile"></i>
                                <span data-purecounter-start="0" data-purecounter-end="6314" data-purecounter-duration="3" class="purecounter"></span>
                                <p><strong>Pets Adotados</strong> que estão em novos lares.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-alarm"></i>
                                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="3" class="purecounter"></span>
                                <p><strong>Pets</strong> estão te esperando para serem adotados.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-people"></i>
                                <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="3" class="purecounter"></span>
                                <p><strong>Volutários</strong> estão se dedicando em ajudar a causa animal.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
            <!-- Final Seção Contagem -->

            <!-- ======= Sessão ADS ======= -->
            <section id="services" class="services">
                <div class="section-title">
                    <h2>3 Vantagens em Adotar um Pet</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-1-square-fill"></i></div>
                                <h4><a href="">Adotar é trazer um novo conceito para a sua vida</a></h4>
                                <p>Gratidão: é um dos principais valores, entre outros ensinamentos, que a adoção de um pet traz para a vida do tutor.</p>
                                <p>A partir de uma adoção as pessoas podem entender melhor o que significa ser grato, pois é exatamente este sentimento que o cão consegue transmitir.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-2-square-fill"></i></div>
                                <h4><a href="">Ter um pet em casa = felicidade para o lar</a></h4>
                                <p>Do mesmo modo em que você pratica o bem para o pet, ele também se esforça para proporcionar momentos de alegria para sua vida.</p>
                                <p> Na verdade, o sentimento de felicidade estará presente para a família toda.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-3-square-fill"></i></div>
                                <h4><a href="">Você estará resgatando uma vida</a></h4>
                                <p>Como os pets de rua estão vulneráveis a diversos tipos de maus-tratos e riscos de vida, ao adotar, você estará garantindo que ele tenha uma oportunidade de sobreviver e de desfrutar de uma vida feliz e saudável com alguém que o ama.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- Final Seção ADS -->

            <!-- ======= Patrocinadores ======= -->
            <section id="clients" class="clients">
                <div class="container">

                    <div class="section-title">
                        <h2>Empresas Amigas da SAAU</h2>
                    </div>
                    <p>Empresas tornam-se agentes transformadores ao assumirem um compromisso com a Responsabilidade Social, desenvolvendo um papel participativo para a mudança da sociedade. Além de aproximar sua empresa das pessoas que amam animais.</p>
                    <p>Pesquisas comprovam empresas engajadas em causas sociais são também impactadas positivamente pelas suas iniciativas solidárias.</p>
                    <br>

                    <div class="clients-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide"><img src="assets/img/clients/secullus.png" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/secullus.png" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/secullus.png" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/secullus.png" class="img-fluid" alt=""></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section>
            <!-- Final Patrocinadores -->

        </main>

        <!-- ======= Seção Notícias I ======= -->
        <div id="blog" class="blog-area">
            <div class="blog-inner area-padding">
                <div class="blog-overly"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-10">
                            <div class="section-title">
                                <h2>Últimas Notícias:</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Start Left Blog -->
                        <div class="col-md-4 col-sm-4 col-xs-10">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="blog.html">
                                        <img src="#" alt="">
                                    </a>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="blog.html">4 serviços pet que você precisa conhecer</a>
                                    </h4>
                                    <p>
                                        Quem tem um bichinho em casa sabe o quanto é complicado viajar por muitos dias. Alguns hotéis até aceitam cachorros, mas e os gatinhos? E o que falar sobre quando precisamos levar a trupe para vacinar?</p>
                                </div>
                                <span>
                                    <a href="blog.html" class="ready-btn">Continue Lendo...</a>
                                </span>
                            </div>
                        </div>
                        <!-- Incio Esquerda -->
                        <div class="col-md-4 col-sm-4 col-xs-10">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="blog.html">
                                        <img src="#" alt="">
                                    </a>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="blog.html">Responsabilidade afetiva pet, você sabe o que é?</a>
                                    </h4>
                                    <p>
                                        Quando a gente gosta, é claro que a gente cuida, já dizia Caetano Veloso em sua música. Mas o que será que cabe no cuidar? É suficiente para um animal ter apenas água fresca e ração?
                                    </p>
                                </div>
                                <span>
                                    <a href="blog.html" class="ready-btn">Continue Lendo...</a>
                                </span>
                            </div>
                        </div>
                        <!-- Final Esquerda-->
                        <!-- Inicio Direita-->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="blog.html">
                                        <img src="#" alt="">
                                    </a>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="blog.html">Queda de pelos nos pets: saiba quando se preocupar</a>
                                    </h4>
                                    <p>
                                        Ver os pelos dos bichinhos voando pela casa é uma coisa que me preocupa. Claro, não apenas por uma questão de limpeza, mas também porque acho que em algum momento os gatos aqui vão ficar carecas!
                                    </p>
                                </div>
                                <span>
                                    <a href="blog.html" class="ready-btn">Continue Lendo...</a>
                                </span>
                            </div>
                        </div>
                        <!-- Final Direita-->
                    </div>
                </div>
            </div>
        </div><br>
        <!-- Fim Seção Notícias -->
    @endsection('conteudo')
   

</body>

</html>