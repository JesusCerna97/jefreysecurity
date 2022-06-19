<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>WEB JEFREYSECURITY | Página profesional en seguridad electrónica</title>
</head>

<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">JEFREYSECURITY</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">Acerca De</a>
                    </li>
                    <li class="nav__item">
                        <a href="#services" class="nav__link">Servicios</a>
                    </li>
                    <li class="nav__item">
                        <a href="#process" class="nav__link">Procesos</a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">Contacto</a>
                    </li>
                </ul>

                <div class="nav__dark">
                    <!-- Theme change button -->
                    <span class="change-theme-name">Modo Oscuro</span>
                    <i class="ri-moon-line change-theme" id="theme-button"></i>
                </div>

                <i class="ri-close-line nav__close" id="nav-close"></i>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-function-line"></i>
            </div>
        </nav>
    </header>

    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <img src="assets/img/home1.jpg" alt="" class="home__img">

            <div class="home__container container grid">
                <div class="home__data">
                    <span class="home__data-subtitle">Protege a tu familia</span>
                    <h1 class="home__data-title">Tu Seguridad <br> Es <b>Nuestro <br> Compromiso</b></h1>
                    <a href="#about" class="button">Explora</a>

                </div>

                <div class="home__social">
                    <a href="https://www.facebook.com/people/JEFREY-SECURITY-Electricista-Profesional-Sanchez/100065559289921/" target="_blank" class="home__social-link">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="https://www.instagram.com/jefreysecurity/?hl=es-la" target="_blank" class="home__social-link">
                        <i class='bx bxl-instagram'></i>
                    </a>
                    <a href="https://vm.tiktok.com/ZMN1SG2JT" target="_blank" class="home__social-link">
                        <i class='bx bxl-tiktok'></i>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=%2B51922333731" target="_blank" class="home__social-link">
                        <i class='bx bxl-whatsapp'></i>
                    </a>
                </div>

                <div class="home__info">
                    <div>
                        <span class="home__info-title">Información del Proceso</span>
                        <a href="#process" class="button button--flex button--link home__info-button">
                            Leer más <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>

                    <div class="home__info-overlay">
                        <img src="assets/img/home2.jpg" alt="" class="home__info-img">
                    </div>
                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title about__title">Más Información <br> Acerca De Nosotros</h2>
                    <p class="about__description">Brindamos seguridad y protección al cliente a través de productos de
                        alta calidad con tecnología de última generación. Necesitas
                        proteger tu casa y negocio, no esperes y contactanos.
                    </p>
                    <a href="#contact" class="button">Contactanos ahora</a>
                </div>

                <div class="about__img">
                    <div class="about__img-overlay">
                        <img src="assets/img/about1.jpg" alt="" class="about__img-one">
                    </div>

                    <div class="about__img-overlay">
                        <img src="assets/img/about2.jpg" alt="" class="about__img-two">
                    </div>
                </div>
            </div>
        </section>

        <!--==================== SERVICES ====================-->
        <section class="services section" id="services">
            <h2 class="section__title">Nuestros Servicios <br> para Tu Protección</h2>

            <div class="services__container container swiper-container">
                <div class="swiper-wrapper">
                    <!--==================== SERVICES 1 ====================-->
                    <div class="services__card swiper-slide">
                        <img src="assets/img/services1.jpg" alt="" class="services__img">
                        <div class="services__data">
                            <h2 class="services__title">Cámaras</h2>
                            <span class="services__description">De seguridad</span>
                        </div>
                    </div>

                    <!--==================== SERVICES 2 ====================-->
                    <div class="services__card swiper-slide">
                        <img src="assets/img/services2.jpg" alt="" class="services__img">
                        <div class="services__data">
                            <h2 class="services__title">Alarmas</h2>
                            <span class="services__description">Contra incendios</span>
                        </div>
                    </div>

                    <!--==================== SERVICES 3 ====================-->
                    <div class="services__card swiper-slide">
                        <img src="assets/img/services3.jpg" alt="" class="services__img">
                        <div class="services__data">
                            <h2 class="services__title">Alarmas</h2>
                            <span class="services__description">Contra robos</span>
                        </div>
                    </div>

                    <!--==================== SERVICES 4 ====================-->
                    <div class="services__card swiper-slide">
                        <img src="assets/img/services4.jpg" alt="" class="services__img">
                        <div class="services__data">
                            <h2 class="services__title">Cercos</h2>
                            <span class="services__description">Eléctricos</span>
                        </div>
                    </div>

                    <!--==================== SERVICES 5 ====================-->
                    <div class="services__card swiper-slide">
                        <img src="assets/img/services5.jpg" alt="" class="services__img">
                        <div class="services__data">
                            <h2 class="services__title">Control</h2>
                            <span class="services__description">De acceso</span>
                        </div>
                    </div>

                    <!--==================== SERVICES 6 ====================-->
                    <div class="services__card swiper-slide">
                        <img src="assets/img/services6.jpg" alt="" class="services__img">
                        <div class="services__data">
                            <h2 class="services__title">Videoportero</h2>
                            <span class="services__description">Digital</span>
                        </div>
                    </div>

                    <!--==================== SERVICES 7 ====================-->
                    <div class="services__card swiper-slide">
                        <img src="assets/img/services7.jpg" alt="" class="services__img">
                        <div class="services__data">
                            <h2 class="services__title">Intercomunicador</h2>
                            <span class="services__description">Digital</span>
                        </div>
                    </div>

                    <!--==================== SERVICES 8 ====================-->
                    <div class="services__card swiper-slide">
                        <img src="assets/img/services8.jpg" alt="" class="services__img">
                        <div class="services__data">
                            <h2 class="services__title">Alarmas</h2>
                            <span class="services__description">comunitarias</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== INFO ====================-->
        <section class="info section container">
            <h2 class="section__title info__title container">
                Información de <br> nuestros servicios
            </h2>

            <div class="info__container container grid">
                <div class="info__group">
                    <div class="info__item">
                        <header class="info__header">
                            <i class="ri-add-line info__icon"></i>
                            <h3 class="info__item-title">
                                Cámaras de seguridad
                            </h3>
                        </header>

                        <div class="info__content">
                            <p class="info__description">
                                Este dispositivo es la mejor opción para tu seguridad, lo cual le permite observar un
                                área determinada e identifica rostros de personas y placas de vehículos.
                            </p>
                        </div>
                    </div>

                    <div class="info__item">
                        <header class="info__header">
                            <i class="ri-add-line info__icon"></i>
                            <h3 class="info__item-title">
                                Alarmas contra incendios
                            </h3>
                        </header>

                        <div class="info__content">
                            <p class="info__description">
                                Este dispositivo puede ser electrónico, electroacústica, de campana o de bocina, el
                                equipo advierte a la gente de un edificio, fabrica o un taller de un posible incendio
                                para realizar la evacuación respectiva.
                            </p>
                        </div>
                    </div>

                    <div class="info__item">
                        <header class="info__header">
                            <i class="ri-add-line info__icon"></i>
                            <h3 class="info__item-title">
                                Alarmas contra robos
                            </h3>
                        </header>

                        <div class="info__content">
                            <p class="info__description">
                                El sistema de es un elemento de seguridad que es capaz de advertir una alarma cumpliendo
                                así una función disuasoria frente a posibles problemas que puedan ocurrir.
                            </p>
                        </div>
                    </div>

                    <div class="info__item">
                        <header class="info__header">
                            <i class="ri-add-line info__icon"></i>
                            <h3 class="info__item-title">
                                Control de acceso
                            </h3>
                        </header>

                        <div class="info__content">
                            <p class="info__description">
                                Este sistema permite o restringe la entrada de una persona o vehículo a una empresa o a
                                una determinada zona de la misma.
                            </p>
                        </div>
                    </div>

                    <div class="info__item">
                        <header class="info__header">
                            <i class="ri-add-line info__icon"></i>
                            <h3 class="info__item-title">
                                Alarmas comunitarias
                            </h3>
                        </header>

                        <div class="info__content">
                            <p class="info__description">
                                Es un sistema electrónico de vigilancia comunitaria o comunitario que ayuda a prevenir
                                delitos o advierte a los hogares en un área cubierta por una alerta de una emergencia
                                que está afectando.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="info__group">
                    <div class="info__item">
                        <header class="info__header">
                            <i class="ri-add-line info__icon"></i>
                            <h3 class="info__item-title">
                                Cercos eléctricos
                            </h3>
                        </header>

                        <div class="info__content">
                            <p class="info__description">
                                Este sistema repele al intruso de una manera muy segura, lo suficientemente dolorosa
                                como para evitar la intrusión.
                            </p>
                        </div>
                    </div>

                    <div class="info__item">
                        <header class="info__header">
                            <i class="ri-add-line info__icon"></i>
                            <h3 class="info__item-title">
                                Videoporteros digitales
                            </h3>
                        </header>

                        <div class="info__content">
                            <p class="info__description">
                                Los videoporteros están formados por dos equipos, una placa colocada en el exterior que
                                se utiliza para llamar y un monitor o teléfono dentro de la vivienda para dar acceso.
                                Las principales funciones son la comunicación y control de las entradas.
                            </p>
                        </div>
                    </div>

                    <div class="info__item">
                        <header class="info__header">
                            <i class="ri-add-line info__icon"></i>
                            <h3 class="info__item-title">
                                Intercomunicadores digitales
                            </h3>
                        </header>

                        <div class="info__content">
                            <p class="info__description">
                                Puede definirse como un sistema independiente de comunicación electrónica destinado a un
                                diálogo limitado o privado.
                            </p>
                        </div>
                    </div>

                    <div class="info__item">
                        <header class="info__header">
                            <i class="ri-add-line info__icon"></i>
                            <h3 class="info__item-title">
                                Electricidad residencial
                            </h3>
                        </header>

                        <div class="info__content">
                            <p class="info__description">
                                La electricidad residencial es la tensión eléctrica de corriente alterna (CA) de
                                propósito
                                general para suministro de energía eléctrica.
                            </p>
                        </div>
                    </div>

                    <div class="info__item">
                        <header class="info__header">
                            <i class="ri-add-line info__icon"></i>
                            <h3 class="info__item-title">
                                Electricidad industrial
                            </h3>
                        </header>

                        <div class="info__content">
                            <p class="info__description">
                                Electricidad industrial es la disciplina que busca la óptima gestión en diferentes
                                procesos productivos como instalaciones, mantenimientos y reparaciones eléctricas a
                                nivel de industrias.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== EXPERIENCE ====================-->
        <section class="experience section">
            <h2 class="section__title">Con nuestra experiencia <br> te serviremos</h2>

            <div class="experience__container container grid">
                <div class="experience__img grid">
                    <div class="experience__overlay">
                        <img src="assets/img/experience1.jpg" alt="" class="experience__img-one">
                    </div>

                    <div class="experience__overlay">
                        <img src="assets/img/experience2.jpg" alt="" class="experience__img-two">
                    </div>
                </div>
            </div>
        </section>

        <!--==================== VIDEO ====================-->
        <section class="video section">
            <h2 class="section__title">Video</h2>

            <div class="video__container container">
                <p class="video__description">
                    Descubre más con nuestro video la importancia de tener seguridad en tu entorno, ya sea en casa o
                    trabajo y tu familia.
                </p>

                <div class="video__content">
                    <video id="video-file">
                        <source src="assets/video/video.mp4" type="video/mp4">
                    </video>

                    <button class="button button--flex video__button" id="video-button">
                        <i class="ri-play-line video__button-icon" id="video-icon"></i>
                    </button>
                </div>
            </div>
        </section>

        <!--==================== PROCESS ====================-->
        <section class="process section container" id="process">
            <div class="process__bg">
                <h2 class="section__title process__title">
                    Proceso <br> de trabajo
                </h2>

                <div class="process__container container grid">
                    <div class="process__card">
                        <div class="process__card-number">01</div>
                        <h3 class="process__card-title"><b>Instalación</b></h3>
                        <p class="process__card-description">
                            Somos especialistas en instalaciones de circuito cerrado de televisión, alarmas
                            contra robo, cerco eléctrico, alarma contra incendios, control remoto, control de acceso y
                            otros.
                        </p>
                    </div>

                    <div class="process__card">
                        <div class="process__card-number">02</div>
                        <h3 class="process__card-title"><b>Mantenimiento</b></h3>
                        <p class="process__card-description">
                            Brindamos mantenimiento de circuito cerrado de televisión, sistemas de vídeo vigilancia,
                            alarmas contra robo, cerco eléctrico, alarma contra incendios, control remoto, control de
                            acceso y otros.
                        </p>
                    </div>

                    <div class="process__card">
                        <div class="process__card-number">03</div>
                        <h3 class="process__card-title"><b>Luces de emergencia</b></h3>
                        <p class="process__card-description">
                            Brindamos luces de emergencia con la finalidad de preveer accidentes y garantizar la
                            seguridad de las personas ante situaciones de riesgo.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== TESTIMONIAL ====================-->
        <section class="testimonial section container" id="testimonial">
            <h2 class="section__title">Testimonios <br> de los clientes</h2>

            <div class="testimonial__container container swiper-container">
                <div class="swiper-wrapper">
                    <!--==================== TESTIMONIAL 1 ====================-->
                    <div class="testimonial__content swiper-slide">
                        <div class="testimonial__data">
                            <div class="testimonial__header">
                                <img src="assets/img/testimonial1.jpg" alt="" class="testimonial__img">

                                <div>
                                    <h3 class="testimonial__name">Sara Smith</h3>
                                    <span class="testimonial__client">Cliente</span>
                                </div>
                            </div>

                            <div>
                                <i class="bi bi-star-fill testimonial__icon-star"></i>
                                <i class="bi bi-star-fill testimonial__icon-star"></i>
                                <i class="bi bi-star-fill testimonial__icon-star"></i>
                                <i class="bi bi-star-fill testimonial__icon-star"></i>
                                <i class="bi bi-star-half testimonial__icon-star"></i>
                            </div>
                        </div>

                        <p class="testimonial__description">
                            Me quedo con una buena impresión, realizo mi proyecto con buena calidad.
                        </p>
                    </div>

                    <!--==================== TESTIMONIAL 2 ====================-->
                    <div class="testimonial__content swiper-slide">
                        <div class="testimonial__data">
                            <div class="testimonial__header">
                                <img src="assets/img/testimonial2.jpg" alt="" class="testimonial__img">

                                <div>
                                    <h3 class="testimonial__name">Matt Robinson</h3>
                                    <span class="testimonial__client">Cliente</span>
                                </div>
                            </div>

                            <div>
                                <i class="bi bi-star-fill testimonial__icon-star"></i>
                                <i class="bi bi-star-fill testimonial__icon-star"></i>
                                <i class="bi bi-star-fill testimonial__icon-star"></i>
                                <i class="bi bi-star-fill testimonial__icon-star"></i>
                                <i class="bi bi-star-half testimonial__icon-star"></i>
                            </div>
                        </div>

                        <p class="testimonial__description">
                            Desde que contamos con el servicio de JEFREYSECURITY nuestras familias están más seguras.
                        </p>
                    </div>

                    <!--==================== TESTIMONIAL 3 ====================-->
                    <div class="testimonial__content swiper-slide">
                        <div class="testimonial__data">
                            <div class="testimonial__header">
                                <img src="assets/img/testimonial3.jpg" alt="" class="testimonial__img">

                                <div>
                                    <h3 class="testimonial__name">Raul Harris</h3>
                                    <span class="testimonial__client">Cliente</span>
                                </div>
                            </div>

                            <div>
                                <i class="bi bi-star-fill testimonial__icon-star"></i>
                                <i class="bi bi-star-fill testimonial__icon-star"></i>
                                <i class="bi bi-star-fill testimonial__icon-star"></i>
                                <i class="bi bi-star-fill testimonial__icon-star"></i>
                                <i class="bi bi-star-half testimonial__icon-star"></i>
                            </div>
                        </div>

                        <p class="testimonial__description">
                            Como cliente encontré en JEFREYSECURITY una solución confiable y segura.
                        </p>
                    </div>

                    <!--==================== TESTIMONIAL 4 ====================-->
                    <div class="testimonial__content swiper-slide">
                        <div class="testimonial__data">
                            <div class="testimonial__header">
                                <img src="assets/img/testimonial4.jpg" alt="" class="testimonial__img">

                                <div>
                                    <h3 class="testimonial__name">Martín James</h3>
                                    <span class="testimonial__client">Cliente</span>
                                </div>
                            </div>

                            <div>
                                <i class="bi bi-star-fill testimonial__icon-star"></i>
                                <i class="bi bi-star-fill testimonial__icon-star"></i>
                                <i class="bi bi-star-fill testimonial__icon-star"></i>
                                <i class="bi bi-star-fill testimonial__icon-star"></i>
                                <i class="bi bi-star-half testimonial__icon-star"></i>
                            </div>
                        </div>

                        <p class="testimonial__description">
                            Nuestro domicilio fue diseñado para contar con estos servicios, ahora nos sentimos mas
                            seguros gracias a JEFREYSECURITY.
                        </p>
                    </div>
                </div>

                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-testimonial"></div>
            </div>
        </section>

        <!--==================== CONTACT ====================-->
        <section class="contact section container" id="contact">
            <div class="contact__container grid">
                <div class="contact__box">
                    <h2 class="section__title contact__title">
                        Comuníquese para <br> mas información
                    </h2>

                    <div class="contact__data">
                        <div class="contact__information">
                            <h3 class="contact__subtitle">Número de contacto</h3>
                            <span class="contact__description">
                                <i class="ri-map-pin-line contact__icon"></i>
                                Calle Esteban Giles 196 - Los Olivos
                            </span>
                        </div>

                        <div class="contact__information">
                            <h3 class="contact__subtitle">Número de contacto</h3>
                            <span class="contact__description">
                                <i class="ri-phone-line contact__icon"></i>
                                +51 922 333 731 <br>
                                +51 912 604 429
                            </span>
                        </div>

                        <div class="contact__information">
                            <h3 class="contact__subtitle">Escríbenos por correo</h3>
                            <span class="contact__description">
                                <i class="ri-mail-line contact__icon"></i>
                                info@jefreysecurity.com <br>
                                ventas@jefreysecurity.com
                            </span>
                        </div>
                    </div>
                </div>

                <form action="" class="contact__form">
                    <div class="contact__inputs">
                        <div class="contact__content">
                            <input name="email" type="email" placeholder=" " class="contact__input" required>
                            <label for="" class="contact__label">Correo</label>
                        </div>

                        <div class="contact__content">
                            <input name="subject" type="text" placeholder=" " class="contact__input" required>
                            <label for="" class="contact__label">Asunto</label>
                        </div>

                        <div class="contact__content contact__area">
                            <textarea name="message" placeholder=" " class="contact__input"></textarea>
                            <label for="" class="contact__label">Mensaje</label>
                        </div>
                    </div>

                    <button name="send" class="button button--flex" type="submit">
                        Enviar Mensaje
                        <i class="ri-arrow-right-up-line button__icon"></i>
                    </button>
                </form>
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content grid">
                <div class="footer__data">
                    <h3 class="footer__title">JEFREYSECURITY</h3>
                    <p class="footer__description">Sabemos lo importante que es la seguridad de sus bienes y su
                        familia, por eso seguimos innovando nuestras técnicas y actualizando nuestra tecnología
                        para brindar mayor seguridad.
                    </p>
                    <div>
                        <a href="https://www.facebook.com/people/JEFREY-SECURITY-Electricista-Profesional-Sanchez/100065559289921/" target="_blank" class="footer__social">
                            <i class='bx bxl-facebook'></i>
                        </a>
                        <a href="https://www.instagram.com/jefreysecurity/?hl=es-la" target="_blank" class="footer__social">
                            <i class='bx bxl-instagram'></i>
                        </a>
                        <a href="https://vm.tiktok.com/ZMN1SG2JT" target="_blank" class="footer__social">
                            <i class='bx bxl-tiktok'></i>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=%2B51922333731" target="_blank" class="footer__social">
                            <i class='bx bxl-whatsapp'></i>
                        </a>
                    </div>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">Servicios</h3>
                    <ul>
                        <li class="footer__item">
                            <p class="footer__link">> Cámaras de seguridad</p>
                        </li>
                        <li class="footer__item">
                            <p class="footer__link">> Alarmas contra incendios</p>
                        </li>
                        <li class="footer__item">
                            <p class="footer__link">> Alarmas contra robos</p>
                        </li>
                        <li class="footer__item">
                            <p class="footer__link">> Alarmas comunitarias</p>
                        </li>
                        <li class="footer__item">
                            <p class="footer__link">> Cercos eléctricos</p>
                        </li>
                        <li class="footer__item">
                            <p class="footer__link">> Control de acceso</p>
                        </li>
                        <li class="footer__item">
                            <p class="footer__link">> Videoportero digital</p>
                        </li>
                        <li class="footer__item">
                            <p class="footer__link">> Intercomunicador digital</p>
                        </li>
                        <li class="footer__item">
                            <p class="footer__link">> Electricidad residencial</p>
                        </li>
                        <li class="footer__item">
                            <p class="footer__link">> Electricidad industrial</p>
                        </li>
                    </ul>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">Secciones</h3>
                    <ul>
                        <li class="footer__item">
                            <a href="#home" class="footer__link">> Home</a>
                        </li>
                        <li class="footer__item">
                            <a href="#about" class="footer__link">> Acerca De</a>
                        </li>
                        <li class="footer__item">
                            <a href="#services" class="footer__link">> Servicios</a>
                        </li>
                        <li class="footer__item">
                            <a href="#process" class="footer__link">> Proceso</a>
                        </li>
                        <li class="footer__item">
                            <a href="#testimonial" class="footer__link">> Testimonios</a>
                        </li>
                        <li class="footer__item">
                            <a href="#contact" class="footer__link">> Contacto</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">Aceptamos tarjetas VISA</h3>
                    <div class="footer__cards">
                        <img src="assets/img/card1.png" alt="" class="footer__card">
                    </div>
                </div>
            </div>

            <div class="footer__rights">
                <p class="footer__copy">&#169; <?php echo date('Y'); ?> <a href="https://www.jefreysecurity.com/" class="footer__copy-link">JEFREYSECURITY</a>. All rigths reserved.</p>
                <div class="footer__terms">
                    <p class="footer__terms-link">Creado por <a href="https://www.strongerpage.com" class="footer__web-link">STRONGERPAGE</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line scrollup__icon"></i>
    </a>

    <!--=============== SCROLL REVEAL===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>