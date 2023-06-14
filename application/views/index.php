<!-- Inclusion de Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Inclusion de jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Inclusion du script de Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
              <h4 class="title"><a href="#" class="stretched-link" data-toggle="modal" data-target="#ModalChallenge">Challenge</a></h4>
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



    <!-- ======= Our Team Section ======= -->
    <section id="joueur" class="team joueur">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Joueurs</h2>
          <p>Voici les différents joueurs</p>
        </div>

   
        <div class="row gy-4">
        <?php foreach ($joueurs as $j): ?>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="<?php echo base_url().$j->url; ?>" class="img-fluid" alt="">
              <h4><?php echo $j->nom ?></h4>
              <span><?php echo $j->prenom ?></span>
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a   data-toggle="modal" data-target="#modaljoueur-<?php echo $j->id; ?>" data-id="<?php echo $j->id; ?>">
          <i class="fa fa-eye fa-2x"></i>
        </a>
              </div>
            </div>
          </div><!-- End Team Member -->
        <?php endforeach; ?>
        <?php foreach ($joueursid as $z): ?>
        <!-- Modal -->
        <div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true" id="modaljoueur-<?php echo $z->id; ?>">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Informations sur le joueur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
          
              <div class="col-md-12 text-center">
                <img src="<?php echo base_url().$z->url; ?>" class="img-fluid" alt="Image" style="width:30%;height:auto;">
              </div>
              <hr style="border-size: 4px solid;border-color:red;">
              <div class="row">
              <div class="col-md-4">
                <h6>Nom du joueur</h6>
                <p><?php echo $z->nom ?></p>
              </div>
                <div class="col-md-4">
                  <h6>prenom du joueur</h6>
                  <p><?php echo $z->prenom ?></p>
                </div>
              <div class="col-md-4">
                <h6>date de naissance</h6>
                <p><?php echo $z->date_naissance?></p>
              </div>
              <div class="col-md-4">
                <h6>poste</h6>
                <p><?php echo $z->poste ?></p>
              </div>
              <div class="col-md-4">
                <h6>poids</h6>
                <p><?php echo $z->poids ?></p>
              </div>
              <div class="col-md-4">
                <h6>dossard</h6>
                <p><?php echo $z->numero ?></p>
              </div>
            </div>
          </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
              </div>
            </div>
          </div>
        </div>
        </div>
          <?php endforeach ?> 
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
        <?php foreach ($challenges as $c): ?>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <a  data-toggle="modal" data-target="#modalchallenge-<?php echo $c->id; ?>" data-id="<?php echo $c->id; ?>"><img src="<?php echo base_url().$c->url; ?>" class="img-fluid" alt=""></a>
              <h4><?php echo $c->intitule; ?></h4>                      
            </div>
          </div><!-- End Team Member -->
          <?php endforeach; ?>
      </div>
    <?php foreach ($challengesid as $t): ?>
      <div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true" id="modalchallenge-<?php echo $t->id; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="largeModalLabel">Informations sur le challenge</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
        
            <div class="col-md-12 text-center">
              <img src="<?php echo base_url().$t->url; ?>" class="img-fluid" alt="Image" style="width:30%;height:auto;">
            </div>
            <hr style="border-size: 4px solid;border-color:red;">
            <div class="row">
            <div class="col-md-4">
              <h6>Nom du joueur</h6>
              <p><?php echo $t->intitule ?></p>
            </div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>

    </section><!-- End Our Team Section -->


  </main><!-- End #main -->
  <script>
    var message = <?php echo $json_message; ?>;
    Swal.fire({
        icon: message.status ? 'success' : 'error',
        title: message.title,
        text: message.message,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
    });
</script>

<!-- Modal -->
<div class="modal" id="ModalChallenge">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Contenu du modal -->
            <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <div class="container" data-aos="fade-up">

<div class="section-header">
  <h2>À propos du Prototype</h2>
  <p>Notre prototype permet de manière simple et rapide de savoir si le squat est bien réalisé de manière sécuritaire. Il se met en place rapidement grâce à une genouillère. Les données sont ensuite envoyé sur le site permettant d'avoir un suivi.</p>
</div>

<div class="row gy-4">
  <div>
    <h3>Notre Projet</h3>
    <img src="assets/img/prototype/genou.jpg" class="img-fluid rounded-4 mb-4" alt="">
     <p>Notre dispositif utilise des capteurs de mouvement et des algorithmes avancés pour analyser en temps réel la posture des joueurs lors des squats. Il détecte les mouvements indésirables où les genoux rentrent vers l'intérieur, prévenant ainsi les blessures. Grâce à des alertes visuelles et sonores, le dispositif informe instantanément les joueurs lorsqu'ils effectuent un squat incorrect.</p>
 
    
      

      <div class="position-relative mt-4">
        <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
      
    </div>
  </div>
</div>

</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                
            </div>
        </div>
    </div>
</div>


