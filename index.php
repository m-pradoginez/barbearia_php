
<!-- PHP INCLUDES -->

<?php

    include "connect.php";
    include "Includes/templates/header.php";
    include "Includes/templates/navbar.php";

?>

    <!-- PÁGINA INICIAL -->

    <section class="home-section" id="home-section">
	    <div class="home-section-content">
            <img class="d-block w-100" src="Design/images/barbershop_image_1.jpg" alt="First slide">
            <div class="carousel-caption d-md-block">
                <h3>Não é apenas um corte de cabelo,  é uma experiência única!</h3>
                <p>
                    Conte com o profissionalismo, o bom atendimento
                    <br>
                    e a qualidade de nossos profissionais.
                </p>
            </div>
	</section>

    <!-- SOBRE -->

    <section id="about" class="about_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_content" style="text-align: center;">
                        <h3>Quem somos nós?</h3>
                        <h2>A Barbearia da rua 13<br>Desde 2022</h2>
                        <img src="Design/images/about-logo.png" alt="logo">
                        <p style="color: #777">
                            Atualmente, o barbeiro precisa ser dotado de habilidades empresariais para que seu negócio possa sobreviver ao ambiente competitivo existente nessa categoria. Vemos inclusive um aumento substancial nos cursos oferecidos a eles, com foco em administração financeira, gestão de pessoas e contabilidade. Outro ponto interessante com relação aos barbeiros de hoje é o fato de muitos deles serem jovens, justamente devido à propagação de cursos para barbeiros e ao acesso facilitado aos mesmos.
                        </p>
                    </div>
                </div>
                <div class="col-md-6  d-none d-md-block">
                    <div class="about_img" style = "overflow:hidden">
                        <img class="about_img_1" src="Design/images/about-1.jpg" alt="about-1">
                        <img class="about_img_2" src="Design/images/about-2.jpg" alt="about-2">
                        <img class="about_img_3" src="Design/images/about-3.jpg" alt="about-3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVIÇOS OFERECIDOS -->

    <section class="services_section" id="services">
        <div class="container">
            <div class="section_heading">
                <h3>Salão</h3>
                <h2>Nossos serviços</h2>
                <div class="heading-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-scissors-1"></i>
                        <h3>Cabelo</h3>
                        <p>Conte com os cortes que nossos especialistas indicam de acordo com o formato de seu rosto ou traga sua ideias.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-razor-2"></i>
                        <h3>Barba</h3>
                        <p>Em nossa barbearia contamos com tratamento de barbas para crecrimento e reaparação das mesmas.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padd_col_res" >
                    <div class="service_box">
                        <i class="bs bs-brush"></i>
                        <h3>Barbear Suave</h3>
                        <p>Nosso serviço de raspagem completa dos pelos faciais</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-hairbrush-1"></i>
                        <h3>Máscara Facial</h3>
                        <p>Experimente nosso serviço de relaxamento e tratamento facial.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AGENDAMENTO -->

    <section class="book_section" id="booking">
        <div class="book_bg"></div>
        <div class="map_pattern"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <form action="appointment.php" method="post" id="appointment_form" class="form-horizontal appointment_form">
                        <div class="book_content">
                            <h2 style="color: white;">Agendar um Horário</h2>
                            <p style="color: #999;">
                                Agende um horário com um de nossos profissionais <br>é só escolher o melhor dia e horário para você que vamos checar nossa disponibilidade.
                            </p>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 padding-10">  
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-6 padding-10">
                                <input type="time" class="form-control">
                            </div>
                        </div>

                        <!-- BOTÃO DE AGENDAR -->

                        <button id="app_submit" class="default_btn" type="submit">
                            Agendar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM SECTION -->

    <section id="team" class="team_section">
        <div class="container">
            <div class="section_heading ">
                <h2>Nossa Equipe</h2>
                <div class="heading-line"></div>
            </div>
            <ul class="team_members row"> 
                <li class="col-lg-3 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/images/team-1.jpg" alt="Team Member">
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/images/team-2.jpg" alt="Team Member">
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/images/team-3.jpg" alt="Team Member">
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/images/team-4.jpg" alt="Team Member">
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- CONTACT SECTION -->

    <section class="contact-section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 sm-padding">
                    <div class="contact-info">
                        <h2>
                            Entre em contato conosco 
                        </h2>
                        <p>
                            Não deixe de nos enviar uma mensagem se ficou com alguma dúvida, ou quiser mais detalhes sobre nossos serviços e atendimento personalizado em um de nossos salões.
                        </p>
                        <h3>
                            Rua Curitiba, Santa Cruz 245 
                            <br>
                            Mogi Mirim, SP 13900660
                        </h3>
                        <h4>
                            <span style = "font-weight: bold">Email:</span> 
                            barbeariadarua13@email.net 
                            <br> 
                            <span style = "font-weight: bold">Phone:</span> 
                            +55 (19) 99999 5555
                        </h4>
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="contact-form">
                        <div id="contact_ajax_form" class="contactForm">
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="contact_name" name="name" class="form-control" placeholder="Nome">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="contact_email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" id="contact_subject" name="subject" class="form-control" placeholder="Assunto">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="contact_message" name="message" cols="30" rows="5" class="form-control message" placeholder="Mensagem"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="contact_send" class="default_btn">Enviar Mensagem</button>
                                </div>
                            </div>
                            <img src="Design/images/ajax_loader_gif.gif" id = "contact_ajax_loader" style="display: none">
                            <div id="contact_status_message"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WIDGET SECTION / FOOTER -->

    <section class="widget_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <img src="Design/images/barbershop_logo.png" alt="Brand">
                        <p>
                            Nossa barbearia é criada para homens que apreciam qualidade tempo e querem manter uma boa aparência.
                        </p>
                        <ul class="widget_social">
                            <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f fa-2x"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter fa-2x"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="LinkedIn"><i class="fab fa-linkedin fa-2x"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="Google+"><i class="fab fa-google-plus-g fa-2x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                     <div class="footer_widget">
                        <h3>Escritório</h3>
                        <p>
                            Rua Curitiba, Santa Cruz 245 - Mogi Mirim/SP, 13900660
                        </p>
                        <p>
                            barbeariadarua13@email.net 
                            <br>
                            +55 (19) 99999 5555   
                        </p>
                     </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <h3>
                            Horário de Funcionamento
                        </h3>
                        <ul class="opening_time">
                            <li>Terça & Quarta - 11:30 - 22:00</li>
                            <li>Quinta - 9:30 - 20:00</li>
                            <li>Sexta - 10:00 - 23:00</li>
                            <li>Sabado - 10:00 - 14:00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>