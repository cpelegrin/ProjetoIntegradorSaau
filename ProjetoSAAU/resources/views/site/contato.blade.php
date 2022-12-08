
<body>
    <!--Titulo da pagina--->
     @section('title','SAAU - Contate-nos/Denúncia')
    <!-- ============== -->
    
    <!--Inclusão do link inicio no menu--->
    @section('inicio')
        <li><a href="{{Route('inicio')}}">INICIO</a></li>
    @endsection
    <!-- ============== -->

    <!--Inclusão da classe ativo no link do menu--->
    @section('ativo-contato','active')
    <!-- ============== -->

    @extends('layouts.basico')
    @section('conteudo')
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
                                <form method="post" action="/contact" role="form" class="php-email-form">
                                    @csrf

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
                                        <div class="loading">Carregando...</div>
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
    @endsection('conteudo')
</body>

</html>