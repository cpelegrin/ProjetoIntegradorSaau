<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SAAU - Contate-nos/Denúncia</title>
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

    <!-- ======= Sessão Barra Topo ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contato@saau.com.br">contato@saau.com.br</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>(44) 98432-8357 / (44) 99945-8902</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
            </div>
        </div>
    </section>
    <!-- ======= Final Sessão Barra Topo ======= -->

    <!-- ======= Cabeçalho ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <a href="index.html"><img src="assets/img/saau-logo.jpg" alt="Logo SAAU" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.html">INICIO</a></li>
                    <li><a href="#">EVENTOS</a></li>
                    <li><a href="{{Route('blog')}}">NOTÍCIAS</a></li>
                    <li><a href="#">LOJA</a></li>
                    <li><a href="sobre-nos.html">SOBRE NÓS</a></li>
                    <li><a class="active" href="contato.html">CONTATO/DENÚNCIA</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- Final Cabeçalho -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.html">Início</a></li>
                    <li>Contato</li>
                </ol>
                <h2>Contato/Denúncia</h2>

            </div>
        </section><!-- Final Breadcrumbs -->

        <!-- ======= Seção Contato ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Nosso Endereço:</h3>
                            <p>Rodovia PR-482, Km 14 Fundos do Aterro Sanitário<br>
                                Saída para Maria Helena<br>
                                Umuarama - PR<br></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Nosso E-mail:</h3>
                            <p>contato@saau.com.br</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Nossos Telefones:</h3>
                            <p>(44) 98432-8357</p>
                            <p>(44) 99945-8902</p>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.3629605257274!2d-53.24849608445052!3d-23.734432873892704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f2d2215815ac87%3A0xce55d0b344440a!2sSAAU%20-%20Sociedade%20De%20Amparo%20aos%20Animais%20de%20Umuarama!5e0!3m2!1spt-BR!2sbr!4v1665145435928!5m2!1spt-BR!2sbr" frameborder="0" style="border:0; width: 100%; height: 370px;" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Nome Completo" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Seu E-mail" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Título" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Deixe aqui sua mensagem ou denúncia..." required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">carregando...</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>
                            </div>
                            <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- Final Seção Contato -->

    </main>
    <!-- Final #main -->

    <!-- ======= Rodapé ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>SAAU - Umuarama</h3>
                        <p>A SAAU - Sociedade de Amparo aos Animais de Umuarama atua na proteção dos animais, recolhendo e cuidando dos animais abandonados e vítimas de maus-tratos.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>LINKS ÚTEIS:</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="sobre-nos.html">Sobre Nós</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Adoções</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Doações</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="contato.html">Denúncias</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Política de Privacidade</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>HORÁRIO DE ATENDIMENTO:</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i>Segunda à Sexta: 13:30h às 17:00h</a></li>
                            <li><i class="bx bx-chevron-right"></i>Sábado: 13:30h às 17:00h</a></li>
                            <li><i class="bx bx-chevron-right"></i>Domingo: Fechado</a></li><br>
                            <strong>Telefone:</strong> (44) 98432-8357<br>
                            <strong>Telefone:</strong> (44) 99945-8902<br>
                            <strong>E-mail:</strong> contato@saau.com.br<br>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>LOCALIZAÇÃO:</h4>
                        <p>
                            Rodovia PR-482, Km 14<br>
                            Fundos do Aterro Sanitário<br>
                            Saída para Maria Helena<br>
                            Umuarama - PR<br>
                            85606-380 <br><br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                {{ date('Y') }} &copy; Todos os Direitos Reservados. <strong><span>SAAU - UMUARAMA</span></strong>.
            </div>
        </div>
    </footer><!-- Final Rodapé -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>