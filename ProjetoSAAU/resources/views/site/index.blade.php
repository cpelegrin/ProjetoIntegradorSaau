<<<<<<< HEAD <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>SAAU - Umuarama</title>
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

        =======

        <body>
            <!--Titulo da pagina--->
            @section('title','SAAU - Umuarama')
            <!-- ============== -->

            >>>>>>> 2e75327066479ac2b5a6d525a1dec9a34819bb9e
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
                                        <h3 class="animate__animated animate__fadeInUp">ADOTE UM PET. QUE VOCÊ GANHARÁ UM AMIGO PARA SEMPRE.</h3>
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
                                    <h3><a href="{{Route('doacao')}}">FAÇA UMA DOAÇÃO</a></h3>
                                    <p>Precisamos manter o local e contratar profissionais que possam se dedicar a dar todo o atendimento que os protetores e adotantes merecem.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-4 mt-lg-0">
                                <div class="icon-box">
                                    <i class="bi bi-person-hearts"></i>
                                    <h3><a href="{{Route('adocao')}}">ADOTE UM PET</a></h3>
                                    <p>Nesse exato momento, existem milhares de doguinhos e gatinhos esperando um humano para chamar de seu.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-4 mt-lg-0">
                                <div class="icon-box">
                                    <i class="bi bi-shield-fill-check"></i>
                                    <h3><a href="{{Route('seja-voluntario')}}">JUNTE-SE A NÓS</a></h3>
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
                                <img src="assets/img/blog/A.jpg" class="img-fluid" alt="...">
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                                <img src="assets/img/blog/B.jpg" class="img-fluid" alt="...">
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                                <img src="assets/img/blog/C.jpg" class="img-fluid" alt="...">
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

                <!-- ======= Seção Testemunhos ======= -->
                <section id="testimonials" class="testimonials">
                    <div class="container">

                        <div class="section-title">
                            <h2>Testemunhos de Tutores</h2>
                            <p>Algumas das frases ditas por pessoas que adotaram cães e gatos.</p>
                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="testimonial-item">
                                    <img src="assets/img/testemunhos/Rosto 1.jpg" class="testimonial-img" alt="">
                                    <h3>Theo Soares</h3>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Adotar me fez mais feliz e contribuiu para o bem estar da minha família.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="testimonial-item mt-4 mt-lg-0">
                                    <img src="assets/img/testemunhos/Rosto 3.jpg" class="testimonial-img" alt="">
                                    <h3>Laura Duarte</h3>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Sou feliz e honrada de ter um amigo sincero; Ele é feito de prontidão, confiança, respeito e coragem. Não conhece ódio, inveja ou mentira. Só traz alegrias e esperanças na vida.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="testimonial-item mt-4">
                                    <img src="assets/img/testemunhos/Rosto 4.jpg" class="testimonial-img" alt="">
                                    <h3>Alice Santiago</h3>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Ele pode destruir os sapatos, os móveis e o jardim, mas nunca o seu coração.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="testimonial-item mt-4">
                                    <img src="assets/img/testemunhos/Rosto 2.jpg" class="testimonial-img" alt="">
                                    <h3>Heitor Pereira</h3>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Amor de verdade não se compra, se encontra.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="testimonial-item mt-4">
                                    <img src="assets/img/testemunhos/Rosto 5.jpg" class="testimonial-img" alt="">
                                    <h3>Davi Augusto</h3>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Se você acredita que todo animal de rua merece um lar, adote.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="testimonial-item mt-4">
                                    <img src="assets/img/testemunhos/Rosto 6.jpg" class="testimonial-img" alt="">
                                    <h3>Samuel dos Santos</h3>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Eu faço parte das pessoas que escolheram amar e respeitar os animais.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>
                </section><!-- Final Seção Testemunhos -->

                <!-- ======= Sessão Vantagens ======= -->
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
                </section><!-- Final Seção Vantagens -->

                <!-- ======= Seção Eventos ======= -->
                <section id="eventos">
                    <div class="section-title">
                        <h2>Nossos Eventos:</h2>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Feira de adoção</h5>
                                        <small>Data: 27/12/2022</small>
                                    </div>
                                    <p class="mb-1">Venha e participe da campanha de doação de cães e gatos. Os animais são castrados e vacinados</p>
                                    <small>Local: Supermercados Planalto da Anchieta. Horário: das 14:00 às 17hr.</small>
                                </a><br>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Bingo SAAU</h5>
                                        <small>Data: 26/12/2022</small>
                                    </div>
                                    <p class="mb-1">Venha se divertir e traga sua família. Concorra a brindes e ajude os nossos animais.</p>
                                    <small>Local: Harmonia Clube de Campo. Horário: das 14:00 às 17hr.</small>
                                </a><br>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Feira de adoção</h5>
                                        <small>Data: 25/12/2022</small>
                                    </div>
                                    <p class="mb-1">Venha e participe da campanha de doação de cães e gatos. Os animais são castrados e vacinados.</p>
                                    <small>Local: Supermercados Planalto da Anchieta. Horário: das 14:00 às 17hr.</small>
                                </a>
                            </div>
                            <!-- ======= Fim Seção Eventos ======= -->

                            <!-- ======= Patrocinadores ======= -->
                            <section id="patrocinadores" class="clients">
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



                            <section id="notícias" class="services">
                                <div class="section-title">
                                    <h2>Últimas Notícias:</h2>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
                                            <div class="card-deck">
                                                <div class="card">

                                                    <img class="card-img-top" class=”float-start w-25″ src="https://site.amigonaosecompra.com.br/wp-content/uploads/2022/10/istockphoto-1330150837-170667a.jpeg" alt="Imagem de capa do card">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><strong>4 serviços pet que você precisa conhecer</strong></h5>
                                                        <p class="card-text">Quem tem um bichinho em casa sabe o quanto é complicado viajar por muitos dias. Alguns hotéis até aceitam cachorros, mas e os gatinhos? E o que falar sobre quando precisamos levar a trupe para vacinar?</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="button" class="btn btn-primary">Continue Lendo...</button>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <img class="card-img-top" class=”float-start w-25″ src="https://site.amigonaosecompra.com.br/wp-content/uploads/2022/10/istockphoto-1330150837-170667a.jpeg" alt="Imagem de capa do card">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><strong>Responsabilidade afetiva pet, você sabe o que é?</strong></h5>
                                                        <p class="card-text">Quando a gente gosta, é claro que a gente cuida, já dizia Caetano Veloso em sua música. Mas o que será que cabe no cuidar? É suficiente para um animal ter apenas água fresca e ração?</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="button" class="btn btn-primary">Continue Lendo...</button>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <img class="card-img-top" src="https://site.amigonaosecompra.com.br/wp-content/uploads/2022/10/istockphoto-1330150837-170667a.jpeg" alt="Imagem de capa do card">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><strong>Queda de pelos nos pets: Saiba quando se preocupar</strong></h5>
                                                        <p class="card-text">Ver os pelos dos bichinhos voando pela casa é uma coisa que me preocupa. Claro, não apenas por uma questão de limpeza, mas também porque acho que em algum momento os gatos aqui vão ficar carecas!</p>
                                                    </div>

                                                    <div class="card-footer">
                                                        <button type="button" class="btn btn-primary">Continue Lendo...</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
            </main>

            @endsection('conteudo')

        </body>

    </html>