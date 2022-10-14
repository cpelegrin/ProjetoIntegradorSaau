<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SAAU - Sobre Nós</title>
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

    @section('ativo-sobrenos','active')

    @extends('layouts.basico')
    @section('conteudo')
        <main id="main">

            <!-- ======= Breadcrumbs ======= -->
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">

                    <ol>
                        <li><a href="index.html">Início</a></li>
                        <li>Sobre Nós</li>
                    </ol>
                    <h2>Sobre Nós</h2>

                </div>
            </section>
            <!-- End Breadcrumbs -->

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
            </section>
            <!-- Final Seção Sobre Nós -->

            <!-- ======= Seção Contagem ======= -->
            <section id="counts" class="counts">
                <div class="container">

                    <div class="row no-gutters">

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-emoji-smile"></i>
                                <span data-purecounter-start="0" data-purecounter-end="20000" data-purecounter-duration="3" class="purecounter"></span>
                                <p><strong>Pets Foram Cadastrados</strong> em nosso banco de dados.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-journal-richtext"></i>
                                <span data-purecounter-start="0" data-purecounter-end="6314" data-purecounter-duration="3" class="purecounter"></span>
                                <p><strong>Pets Adotados</strong> que estão em novos lares.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-headset"></i>
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

            <!-- ======= Seção Testemunhos ======= -->
            <section id="testimonials" class="testimonials">
                <div class="container">

                    <div class="section-title">
                        <h2>Testemunhos Tutores</h2>
                        <p>Algumas das frases ditas por pessoas que adotaram cães e gatos.</p>
                    </div>

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Jão Ninguém</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Adotar o Josué me fez mais feliz e contribuiu para o bem estar da minha família.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="testimonial-item mt-4 mt-lg-0">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>João Ninguém</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Adotar o Josué me fez mais feliz e contribuiu para o bem estar da minha família.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="testimonial-item mt-4">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>João Ninguém</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Adotar o Josué me fez mais feliz e contribuiu para o bem estar da minha família.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="testimonial-item mt-4">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>João Ninguém</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Adotar o Josué me fez mais feliz e contribuiu para o bem estar da minha família.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="testimonial-item mt-4">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>João Ninguém</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Adotar o Josué me fez mais feliz e contribuiu para o bem estar da minha família.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="testimonial-item mt-4">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>João Ninguém</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Adotar o Josué me fez mais feliz e contribuiu para o bem estar da minha família.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
            <!-- Final Seção Testemunhos -->

        </main>
        <!-- Final #main -->
    @endsection('conteudo')
    
</body>

</html>