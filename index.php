<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php /* head */ wp_head(); ?>
</head>
<body>
<main class="page landing-page">
    <section id="header-section" class="bg-dark" style="padding:30px 20px;background-color:rgb(30,160,240);">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-xl-6 offset-sm-1 offset-md-2 offset-xl-3 text-center"><img class="img-fluid" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/logo new blanco.png"></div>
            </div>
            <div class="row justify-content-center" style="padding-top:25px;">
                <div class="col-sm-8 col-md-4 col-lg-3 d-flex justify-content-center align-items-center align-self-center" style="font-size:20px;">
                    <div class="d-flex justify-content-center">
                        <ul class="list-inline" style="margin:0;">
                            <li class="list-inline-item"><a href="https://www.facebook.com/cocinadigital/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.instagram.com/cocinadigital/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCmpEmpyhe2Vl8L9U6o7aWkA" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.behance.net/cocinadigitalideas" target="_blank"><i class="fa fa-behance"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.pinterest.com/cocinadigital/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="https://github.com/cocinadigital" target="_blank"><i class="fa fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 col-md-4 col-lg-3 d-flex justify-content-center align-content-center align-self-center">
                    <ul class="list-unstyled" style="/*text-align:center;*/margin-bottom:0;">
                        <li><a href="tel:+5493416211957" data-rel="external"><i class="fa fa-whatsapp"></i>&nbsp;+549 341 6211957</a></li>
                        <li><a href="tel:+5493413767870" data-rel="external"><i class="fa fa-whatsapp"></i>&nbsp;+549 341 3767870</a></li>
                    </ul>
                </div>
                <div class="col-sm-8 col-md-4 col-lg-3 d-flex justify-content-center align-items-center align-self-center"><a href="https://goo.gl/maps/pxgivWyH31x"><i class="fa fa-map-marker"></i>&nbsp;Rosario, Santa Fe, Argentina</a></div>
            </div>
        </div>
    </section>
    <section class="clean-block clean-hero" style="background-image:url('<?php echo get_template_directory_uri(). '/' ?>assets/img/banner.png');color:transparent;">
            <div class="text">
                <p style="max-width:619px;font-size:27px;font-weight:normal;font-style:normal;color:#ffffff;background-color:rgba(0,0,0,0);line-height:34px;">Diseñamos tu marca, tu página web y promocionamos tu trabajo en redes sociales.</p><button class="btn btn-outline-light btn-lg" type="button" id="buttonContactHeader" data-target="#contactForm">Contactanos</button></div>
    </section>
    <section class="clean-block clean-info dark" style="padding:100px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6"><img class="img-thumbnail" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/JUNTOS OK.jpg"></div>
                <div class="col-md-6">
                    <h3>Nos presentamos...</h3>
                    <div class="getting-started-info">
                        <p>Somos Ezequiel y Naimé, nuestro objetivo es acompañarte a hacer realidad esas ideas que tenés en mente, ayudándote con las piezas que necesita tu empresa o emprendimiento y acompañandote en tu crecimiento.&nbsp;<br><br>Trabajamos
                            a tu medida. Nos adaptamos a tus posibilidades.<br><br></p>
                    </div><button class="btn btn-outline-primary btn-lg" type="button" id="buttonContactAboutUs" data-target="#contactForm">Contactanos</button></div>
            </div>
        </div>
    </section>
    <section class="clean-block features bg-dark" style="color:rgb(255,255,255);">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Nos dedicamos a hacer tu tiempo&nbsp;más flexible<br></h2>
                <p style="max-width:550px;">Realizamos distintas tipos de piezas gráficas: desde logotipos, cartelería, folletería, catálogos, retoques fotográficos, y mucho más para una mejor presentación de tu empresa o emprendimiento.<br></p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 feature-box"><i class="icon-pencil icon" style="color:rgb(248,6,166);"></i>
                    <h4>Diseño de Marca</h4>
                    <p>La pieza esencial de tu empresa para tu diferenciación frente a la competencia.&nbsp;<br></p>
                </div>
                <div class="col-md-5 feature-box"><i class="icon-settings icon" style="color:rgb(0,240,255);"></i>
                    <h4>Diseño de páginas web</h4>
                    <p>Sitios web de alto rendimiento centrados en la experiencia del usuario.<br></p>
                </div>
                <div class="col-md-5 feature-box"><i class="icon-control-play icon" style="color:rgb(255,245,5);"></i>
                    <h4>Contenido audiovisual</h4>
                    <p>Realización y postproducción de videos institucionales o animaciones gráficas.<br></p>
                </div>
                <div class="col-md-5 feature-box"><i class="icon-camera icon"></i>
                    <h4>Fotografía de productos</h4>
                    <p>Desde la fotografía de tu producto al diseño de tu catálogo y el armado de piezas de promoción.<br></p>
                </div>
            </div>
        </div>
    </section>
    <section class="clean-block slider dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Algunos de nuestros trabajos</h2>
            </div>
            <div class="carousel slide" data-ride="carousel" data-keyboard="false" id="carousel-1">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active"><img class="w-100 d-block" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/Gold Stamping Logo Mock-Up.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/1c569452873443.591f627bb7e06.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/1eada152330813.590ca4afa9ce4.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/6141fa61637535.5a749c7e50fd0.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/7441df52873443.591f627bb6f72.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/76c4fe52873443.591f627bb745b.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/988a3d52310149.590bf11cd110c.png" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/a72dd552310149.590bf11cd14fd.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/93547552309119.590be6d7a27d6.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/c0478061613223.5a73cf588892f.png" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/cf2bbe52330813.590ca4afa9946.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/c763ab52873443.591f627bb82d4.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/cf555c52873443.591f627bb6bd2b.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/Coffee3.png" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/e5050f52309119.590be6d7a171a.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/e7eea161613223.5a73cf5888e75.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/MA 1.png" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/mina.png" alt="Slide Image"></div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev" style="width:57px;"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1"
                        role="button" data-slide="next"><span class="carousel-control-next-icon" style="color:rgb(0,194,255);"></span><span class="sr-only">Next</span></a></div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                    <li data-target="#carousel-1" data-slide-to="2"></li>
                    <li data-target="#carousel-1" data-slide-to="3"></li>
                    <li data-target="#carousel-1" data-slide-to="4"></li>
                    <li data-target="#carousel-1" data-slide-to="5"></li>
                    <li data-target="#carousel-1" data-slide-to="6"></li>
                    <li data-target="#carousel-1" data-slide-to="7"></li>
                    <li data-target="#carousel-1" data-slide-to="8"></li>
                    <li data-target="#carousel-1" data-slide-to="9"></li>
                    <li data-target="#carousel-1" data-slide-to="10"></li>
                    <li data-target="#carousel-1" data-slide-to="11"></li>
                    <li data-target="#carousel-1" data-slide-to="12"></li>
                    <li data-target="#carousel-1" data-slide-to="13"></li>
                    <li data-target="#carousel-1" data-slide-to="14"></li>
                    <li data-target="#carousel-1" data-slide-to="15"></li>
                    <li data-target="#carousel-1" data-slide-to="16"></li>
                    <li data-target="#carousel-1" data-slide-to="17"></li>
                </ol>
            </div>
        </div>
    </section>
    <section class="clean-block about-us">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Hay equipo!</h2>
                <p style="max-width:726px;">Ya hace cuatro años que emprendimos este viaje que es "Cocina Digital". Somos una familia de tres. Mi esposo Ezequiel y yo (Naimé) conformamos esta empresa que combina nuestros conocimientos y pasiones para ayudar a otros a formar
                    sus emprendimientos e impulsar su empresa.<br></p>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/NAI.jpg">
                        <div class="card-body info">
                            <h4 class="card-title">Naime Galata</h4>
                            <p class="card-text">Diseño y Marketing</p>
                            <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="<?php echo get_template_directory_uri(). '/' ?>assets/img/EZE-1.jpg">
                        <div class="card-body info">
                            <h4 class="card-title">Ezequiel Galata</h4>
                            <p class="card-text">Desarrollo</p>
                            <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contactForm" class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Queremos saber de tí</h2>
                <p style="max-width:520px;">Si tenés alguna consulta para hacernos, no olvides de dejarnos un mensaje aquí o en nuestras redes sociales.</p>
            </div>
            <?php
                echo do_shortcode( '[wpforms id="10" title="false" description="false"]' );
            ?>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="clean-block add-on social-icons">
                        <div class="icons"><a href="https://www.facebook.com/cocinadigital/" target="_blank"><i class="fa fa-facebook"></i></a><a href="https://www.instagram.com/cocinadigital/" target="_blank"><i class="fa fa-instagram"></i></a><a href="https://www.youtube.com/channel/UCmpEmpyhe2Vl8L9U6o7aWkA"
                                target="_blank"><i class="fa fa-youtube-play"></i></a><a href="https://www.behance.net/cocinadigitalideas" target="_blank"><i class="fa fa-behance"></i></a><a href="https://www.pinterest.com/cocinadigital/" target="_blank"><i class="fa fa-pinterest"></i></a>
                            <a
                                href="https://github.com/cocinadigital" target="_blank"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="clean-block add-on newsletter-sign-up">
                        <h2 style="font-size:20px;">Informate si hay novedades!</h2><input type="text" placeholder="Email" class="form-control"><button class="btn btn-outline-primary" type="button">Quiero!</button></div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="page-footer dark">
        <div class="container" style="color:rgb(194,194,194);">
            <div class="row">
                <div class="col-sm-6"><iframe allowfullscreen="" frameborder="0" width="100%" height="auto" src="https://www.google.com/maps/embed/v1/search?key=AIzaSyCVvrHnKquPJ9MPKhH11cCoLxnGXCE3vhI&amp;q=C+Digital+Rosario&amp;zoom=15" style="max-height:200px;"></iframe></div>
                <div
                    class="col-sm-3">
                    <h5>Encontranos</h5>
                    <ul>
                        <li>Alsina 1361</li>
                        <li>Rosario, Santa Fe</li>
                        <li>Argentina</li>
                    </ul>
            </div>
            <div class="col-sm-3">
                <h5>Conocenos</h5>
                <ul>
                    <li><i class="fa fa-whatsapp"></i>&nbsp;<a href="tel:+5493416211957" data-rel="external">+549 341 6211957</a></li>
                    <li><i class="fa fa-whatsapp"></i>&nbsp;<a href="tel:+5493413767870" data-rel="external">+549 341 3767870</a></li>
                    <li><a href="mailto:info@tucocinadigital.com">info@tucocinadigital.com</a>&nbsp;</li>
                </ul>
            </div>
        </div>
        <div class="row" style="padding-top:20px;">
            <div class="col-12 d-flex justify-content-center">
                <figure class="figure"><a href="http://qr.afip.gob.ar/?qr=Z6lkUyxH9mjMBypg1eVv2g,," target="_F960AFIPInfo"><img class="img-fluid" src="http://www.afip.gob.ar/images/f960/DATAWEB.jpg" style="width:auto;height:120px;"></a></figure>
            </div>
        </div>
        </div>
        <div class="footer-copyright">
            <p>© 2018 Cocina Digital</p>
        </div>
</footer>
<?php /* wp_footer */ wp_footer(); ?>
</body>
</html>