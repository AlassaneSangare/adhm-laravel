<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>Association de Devéloppement Humain Mali (ADHM)</title>

    <link rel="stylesheet" href="{{ asset('assets/css/maicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <div class="topbar" style="background-color: #284a71">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="https://wa.me/22370647313"><span class="mai-call text-primary"></span> +223
                                20-20-13-48</a>
                            <span class="divider">|</span>
                            <a href="mailto:sangaremamadou1212@gmail.com"><span class="mai-mail text-primary"></span>
                                contactadhm@adhm.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="#"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-dribbble"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <!-- {{-- <img src="./public/brand.png" width="86" alt="" class="nav-brand"> --}} -->
                <a class="nav-brand" href="#">
                    <img src="{{ asset('images/ADHM-LOGO.png') }}" width="75" alt="">

                </a>



                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                    aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link " href="#quisommesnous">Qui Sommes Nous ?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projets">Projet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Nous Contactez</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Faire un don</a>
                        </li>

                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>

    <div id="heroSection" class="page-hero bg-image" style="background-image: url('{{ asset('images/car3.png') }}');">
        <div class="hero-section">
            <div class="container text-end wow zoomIn">
                <span id="heroSubhead"
                    style="font-size:3rem; line-height:1.2;font-weight:700;text-shadow:0.2px 0.2px #000;">Pour un avenir
                    meilleur</span>
                <h1 id="heroTitle"
                    style="font-size:3rem; line-weight:1.2;font-weight:700;text-shadow:0.2px 0.2px #000;">Au service du
                    développement</h1>
                <!-- {{-- <a href="#" class="btn btn-primary">Let's Consult</a> --}} -->
            </div>
        </div>
    </div>
    <div class="bg-white" id="quisommesnous">

        <div class="page-section mt-0 pt-0 pb-1 mb-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3 wow fadeInUp">
                        <h1 style="color:#318ead;font-weight:500; font-family: inherit; font-size: 3rem;">Association
                            de Développement Humain Mali</h1>

                        <p class="text-gray text-justify mb-4" style="font-size: 1.2rem;">ADHM est une association à but
                            non lucratif et d’utilité publique (intérêt général)
                            installée au Mali depuis 2006, qui œuvre (active) dans la coopération au développement. Ses
                            finalités résident dans la mise en œuvre de plusieurs
                            actions en vue de: Contribuer à l’amélioration des conditions de vie des personnes
                            vulnérables et défavorisées particulièrement les femmes, et les jeunes
                            à risque de marginalisation et d'exclusion sociale. Défendre et promouvoir les droits
                            humains fondamentaux et impulser l’égalité entre les femmes et les hommes.
                            Favoriser la participation citoyenne et consolider la société civile considérées comme
                            principaux vecteurs à garantir l’efficacité du dialogue avec les pouvoirs publics, la
                            performance
                            de la bonne gouvernance et la promotion du développement humain durable. </p>
                        <!-- {{-- <a href="about.html" class="btn btn-success">Lire plus</a> --}} -->
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="img-place custom-img-1">
                            <img src="{{ asset('images/ADHM-LOGO.png') }}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .bg-light -->
    </div>


    <div class="page-section mt-0 pt-0 pb-1 mb-1">
        <div class="fluid-container">
            <div class="row">
                <div class="col-md-4 vh-100 " style="background-color: #284a71;">
                    <div class="p-5 " style="color: white;">
                        <h2 style="font-size: 2.7rem; font-weight:800;line-height:1.4;">Notre mission</h2>
                        <p class="h5" style="font-family:Ubuntu;line-height:1.7; ">ADHM attache une importance
                            décisive et
                            singulière à la promotion du développement humain durable. Cet engagement se manifeste à
                            travers la mise en œuvre d'actions concrètes et de projets stratégiques, conçus pour
                            répondre aux besoins des communautés locales. En plus de ces initiatives, l'ADHM s'investit
                            dans la formation spécialisée, visant à renforcer les capacités des acteurs locaux et à
                            favoriser l'autonomie. Les investigations rigoureuses menées par l'organisation permettent
                            d'identifier les défis et les opportunités du terrain. </p>



                    </div>
                </div>

                <div class="col-md-4 vh-100 " style="background-color: #08590b;">
                    <div class="p-5 " style="color: white;">
                        <h2 style="font-size: 2.7rem; font-weight:800;line-height:1.4;">Notre vision</h2>
                        <p class="h5" style="font-family:Ubuntu; ">ADHM s’engage pleinement au renforcement et à
                            la promotion du développement démocratique et de la bonne gouvernance par la participation
                            citoyenne, le rôle consolidé de la société civile, le respect des droits fondamentaux, et
                            l’appui de l’équité et de la cohésion sociale.
                            ADHM, s’acquitte activement à la conception des coopérations et partenariats avec les
                            acteurs publics et privés afin d’optimiser la coopération au développement.
                            A partir d’une démarche empirique, toutes ces actions permises sont conçues dans l’ambition
                            de permettre à la population cible l’opportunité d’optimiser leurs ressources, de gérer et
                            d’orienter leurs modes de vies et leurs vécus vers un destin inhérent à leurs propres
                            décisions et choix.
                        </p>



                    </div>
                </div>
                <div class="col-md-4 vh-100 " style="background-color: #284a71;">
                    <div class="p-5 " style="color: white;">
                        <h2 style="font-size: 2.7rem; font-weight:800;line-height:1.4;">Nos objectifs</h2>
                        <p class="h5" style="font-family:Ubuntu;line-height:1.7; ">ADHM tend à favoriser
                            l’amélioration du développement humain durable, les principes de solidarité, de justice
                            sociale, d’équité et d’inclusion sociale.
                            Elle vise aussi le renforcement des mécanismes de la participation citoyenne, de la bonne
                            gouvernance, la promotion et le respect des droits humains.
                            En collaborant avec des organismes maliens et étrangers ADHM, accorde à la société civile et
                            aux acteurs publics un accompagnement et une assistance afin de concevoir des programmes et
                            des projets stratégiques en faveur de population cible. </p>



                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="page-section mt-0 mb-0" id="projets" style="background-color: #f7f9fb;">
        <div class="container pt-1 mt-1">
            <h1 class="text-center mt-1 pt-1 mb-5 wow fadeInUp"
                style="color:#318ead; font-weight:500; font-family: inherit; font-size: 3rem;">
                Projets
            </h1>
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/1.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Assistance humanitaire pour les personnes déplacées en raison de
                                conflits ou de catastrophes.</h5>
                            <p class="card-text">Remise de vivres aux enfants des familles déplacées du Centre Mabilé
                                de Niamana en commune 6 du district de Bamako.....</p>
                            <a href="#" class="nav-link">Lire plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/2.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Soutien financier et technique pour développer l'élevage de
                                poissons.</h5>
                            <p class="card-text">Accompagnement et de financement disponibles pour les projets liés à
                                l'élevage de poissons....</p>
                            <a href="#" class="nav-link">Lire Plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/3.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Mesures d'aide pour faire face aux conséquences de la sécheresse.
                            </h5>
                            <p class="card-text">Distribution d'eau potable et fourniture de semences résistantes à la
                                sécheresse, et le développement de programmes d'aide alimentaire...</p>
                            <a href="#" class="nav-link">Lire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="page-section bg-light mt-0 mb-0"style="background-image: url('{{ asset('images/car1.png') }}');">
        <div class="container">
            <h1 class="text-center pb-4 wow fadeInUp"
                style="font-size:3rem; line-height:1.2;font-weight:700;text-shadow:0.2px 0.2px #000; font-family: inherit; color:#fff;">
                ADHM en chiffre</h1>

            <div class="container mt-5">
                <div class="row text-center">
                    <div class="col-md-3">
                        <button class="btn btn-light"><i class="fa-solid fa-house fa-3x"></i></button>

                        <h2 class="display-6"
                            style="color : #fff; font-family:Montserrat,Sans-serif;font-size: 50px;font-weight: 600;">
                            14
                        </h2>

                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-light"><i class="fa-solid fa-people-group fa-3x"></i></button>
                        <h2 class="display-6"
                            style="color : #fff; font-family:Montserrat,Sans-serif;font-size: 50px;font-weight: 600;">
                            590
                        </h2>

                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-light"><i class="fa-regular fa-folder fa-3x"></i></button>
                        <h2 class="display-6"
                            style="color : #fff; font-family:Montserrat,Sans-serif;font-size: 50px;font-weight: 600;">
                            21
                        </h2>

                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-light"><i class="fa-solid fa-lightbulb fa-3x"></i></button>
                        <h2 class="display-6"
                            style="color : #fff; font-family:Montserrat,Sans-serif;font-size: 50px;font-weight: 600;">
                            4
                        </h2>

                    </div>
                </div>
            </div>
            <div class="container text-center mt-4">
                <a href="#" class="btn btn-success">En savoir plus</a>
            </div>
        </div>
    </div>

    <div class="page-section" id="contact" style="background-color: #f7f9fb;">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Nous Contactez</h1>

            <form class="main-form">
                <div class="row mt-5 ">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" class="form-control" placeholder="Nom Complet..">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <input type="text" class="form-control" placeholder="Adresse Email..">
                    </div>

                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <input type="text" class="form-control" placeholder="Téléphone..">
                    </div>
                    <div class="col-12 py-2 wow " data-wow-delay="300ms">
                        <input type="text" class="form-control" placeholder="Sujet..">
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Votre message.."></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Envoyer</button>
            </form>
        </div>
    </div> <!-- .page-section -->

    <!-- .banner-home -->

    <footer class="page-footer" style="background-color: #284a71;">
        <div class="container">

            <div class="row px-md-3">
                <div class="col-sm-6 col-lg-3 py-3">
                    <img class="bg-white" src="{{ asset('images/ADHM-LOGO.png') }}" width="100px" alt="">
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5></h5>
                    <ul class="footer-menu">
                        <li>
                            <a href="#quisommesnous">Qui sommes nous ?</a>
                        </li>
                        <li>
                            <a href="#projets">Projet</a>
                        </li>
                        <li>
                            <a href="#contact">Nous Contactez</a>
                        </li>
                        <li>
                            <a href="#">Faire un don</a>
                        </li>
                    </ul>
                </div>


                <div class="col-sm-6 col-lg-3 py-3">


                    <h5 class="mt-3">Réseaux Sociaux</h5>
                    <div class="footer-sosmed mt-3">
                        <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <hr>

            <p id="copyright">Copyright &copy; 2024 <a href="#">ADHM</a>.
                Tous les droits réservés.</p>
        </div>
    </footer>

    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>

    <script>
        const texts = [{
                subhead: "Pour un avenir meilleur",
                title: "Au service du développement"
            },
            {
                subhead: "Ensemble, bâtissons demain",
                title: "Au cœur de l'humanité"
            },
            {
                subhead: "Une vision pour l'avenir",
                title: "Engagés pour le bien-être"
            }
        ];

        let currentIndex = 0;

        function updateHeroText() {
            const heroSubhead = document.getElementById('heroSubhead');
            const heroTitle = document.getElementById('heroTitle');

            heroSubhead.textContent = texts[currentIndex].subhead;
            heroTitle.textContent = texts[currentIndex].title;

            currentIndex = (currentIndex + 1) % texts.length;
        }

        setInterval(updateHeroText, 2500); // Change text every 5 seconds
    </script>




</body>

</html>
