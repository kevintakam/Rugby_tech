
<<<<<<< HEAD
=======
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rugby tech</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>



  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="<?= base_url() ?>assets/img/logo.png" style="width:500%;height:auto;">
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#prototype">Prototype</a></li>
          <li><a href="#joueur">Joueurs</a></li> 
          <li><a href="#challenge">Challenges</a></li> 
          <?php if ($this->session->userdata('login')==null) { ?>         
          <li><a href="<?= base_url('login') ?>">Connexion</a></li>
          <?php }else{ ?>
            <li><span class="text-white"><?php echo $this->session->userdata('login'); ?>  <i  class="fas fa-circle text-success"></i> </span> </li>  
            <li>  <a href="<?= base_url('login/deconnexion') ?>"><i  class="fas fa-sign-out-alt fa-x text-white"></i></a></li>
            <?php } ?>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->
>>>>>>> e7f882304cfedb1ec0aa65d58fc9b73a7522db64

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Bienvenue sur  <span>Rugby Tech</span></h2>
          <p>Ici vous pourrez trouver toutes les informations des joueurs ainsi que leurs performances.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Get Started</a>
             </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="#" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box" style="background: black;">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="<?= base_url('welcome/challenge')?>" class="stretched-link">Challenge</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box" style="background: black;">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Match</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box" style="background: black;">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Entraînement</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box" style="background: black;">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Prototype</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>À propos de RugbyTech</h2>
          <p>Chez RugbyTech, nous sommes une équipe d'étudiants passionnés par le rugby et l'innovation technologique. Notre objectif est de promouvoir la sécurité et l'amélioration des performances des joueurs de rugby grâce à des solutions novatrices. Nous avons développé un dispositif révolutionnaire qui vérifie la position des genoux lors des squats, prévenant les blessures et optimisant l'entraînement</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>Notre Projet</h3>
            <img src="assets/img/equipe.png" class="img-fluid rounded-4 mb-4" alt="">
            <p>Notre équipe multidisciplinaire est composée d'ingénieurs, de développeurs et de passionnés de rugby. Nous croyons que la technologie peut bénéficier au sport en aidant les joueurs à atteindre leur plein potentiel tout en réduisant les risques de blessures</p>
            <p>Notre dispositif utilise des capteurs de mouvement et des algorithmes avancés pour analyser en temps réel la posture des joueurs lors des squats. Il détecte les mouvements indésirables où les genoux rentrent vers l'intérieur, prévenant ainsi les blessures. Grâce à des alertes visuelles et sonores, le dispositif informe instantanément les joueurs lorsqu'ils effectuent un squat incorrect.</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p>
              Nous avons également développé une plateforme en ligne qui enregistre les données de chaque joueur, telles que le nombre de répétitions et les performances au fil du temps. Ces données permettent aux entraîneurs et aux joueurs d'analyser les progrès et d'identifier les domaines à améliorer.
              </p>
              
              <p>
              Chez RugbyTech, nous sommes déterminés à fournir des outils technologiques pour améliorer la sécurité et les performances des joueurs de rugby. Rejoignez-nous dans notre mission d'améliorer le rugby grâce à la technologie. Ensemble, repoussons les limites, prévenons les blessures et inspirons une nouvelle génération de joueurs performants et en bonne santé.

              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

     <!-- ======= About Us Section ======= -->
     <section id="prototype" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>À propos de notre prototype</h2>
          <p>Chez RugbyTech, nous sommes une équipe d'étudiants passionnés par le rugby et l'innovation technologique. Notre objectif est de promouvoir la sécurité et l'amélioration des performances des joueurs de rugby grâce à des solutions novatrices. Nous avons développé un dispositif révolutionnaire qui vérifie la position des genoux lors des squats, prévenant les blessures et optimisant l'entraînement</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>Notre Projet</h3>
            <img src="assets/img/equipe.png" class="img-fluid rounded-4 mb-4" alt="">
            <p>Notre équipe multidisciplinaire est composée d'ingénieurs, de développeurs et de passionnés de rugby. Nous croyons que la technologie peut bénéficier au sport en aidant les joueurs à atteindre leur plein potentiel tout en réduisant les risques de blessures</p>
            <p>Notre dispositif utilise des capteurs de mouvement et des algorithmes avancés pour analyser en temps réel la posture des joueurs lors des squats. Il détecte les mouvements indésirables où les genoux rentrent vers l'intérieur, prévenant ainsi les blessures. Grâce à des alertes visuelles et sonores, le dispositif informe instantanément les joueurs lorsqu'ils effectuent un squat incorrect.</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p>
              Nous avons également développé une plateforme en ligne qui enregistre les données de chaque joueur, telles que le nombre de répétitions et les performances au fil du temps. Ces données permettent aux entraîneurs et aux joueurs d'analyser les progrès et d'identifier les domaines à améliorer.
              </p>
              
              <p>
              Chez RugbyTech, nous sommes déterminés à fournir des outils technologiques pour améliorer la sécurité et les performances des joueurs de rugby. Rejoignez-nous dans notre mission d'améliorer le rugby grâce à la technologie. Ensemble, repoussons les limites, prévenons les blessures et inspirons une nouvelle génération de joueurs performants et en bonne santé.

              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Our Team Section ======= -->
    <section id="joueur" class="team joueur">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Joueurs</h2>
          <p>Voici les différents joueurs</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <h4>Joueur 1</h4>
              <span>Espoir Argent</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Marketing</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <h4>William Anderson</h4>
              <span>Content</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>



    </section><!-- End Our Team Section -->
            <!-- ======= Our Team Section ======= -->
    <section id="challenge" class="team challenge">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Challenges</h2>
          <p>Voici les différents challenges proposés</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/challenge/challenge1.jpg" class="img-fluid" alt="">
              <h4>Challenge 1</h4>
              
              
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/challenge/challenge2.jpg" class="img-fluid" alt="">
              <h4>Challenge 2</h4>
              
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/" class="img-fluid" alt="">
              <h4>William Anderson</h4>
              
              
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->

    
    

   

    

  </main><!-- End #main -->



