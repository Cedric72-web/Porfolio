<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Bienvenue sur mon portfolio. Vous découvrirez ici, les services que je propose et mes différents projets réalisés">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="site.css">

  <title>WebDev72 - Accueil</title>
</head>
<body class="bg-dark text-light" data-bs-spy="scroll" data-bs-target="#navbarSite" data-bs-smooth-scroll="true" tabindex="0">
  <header>
    <!--Start Navbar-->
    <nav id="navbarSite" class="position-fixed navbar navbar-expand-lg navbar-dark bg-transparent w-100">
      <div class="container-fluid">
        <a class="navbar-brand text-custom" href="#">
          <i class="bi bi-code-slash"></i> WebDev72
        </a>
        <!-- Start Menu Burger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Start Menu Burger -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#home">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">A propos</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link" href="#skills">Compétences</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#temoignage">Témoignages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#realisations">Réalisations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
          <div class="navbar-nav">
          </div>
        </div>
      </div>
    </nav>
    <!--End Navbar-->
  </header>
  <main class="main-content-website">
    <!--Start HOME-->
    <section id="home" class="container-fluid">
      <div class="row row-cols-1" id="firstRowHomePage">
        <div class="d-flex justify-content-center flex-column text-center" id="text-presentation">
          <div class="text-bienvenue">Bienvenue !</div>
          <p class="big-text">Je suis développeur</p>
          <div id="type-writer" class="big-text"></div>
          <p class="Descritpion">WebDev72, développeur web depuis 2018, vous propose ses services pour la conception de votre solution web...</p>
          <div class="btn-container">
            <button class="btn btn-outline-danger">Contactez-moi</button>
          </div>
          <div class="" id="mouseBtn">
            <a href="#about" class="scroll">
            <i class="bi bi-mouse text-white"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!--End Home-->

  <!--Start ABOUT-->
  <section id="about" class="section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="mt-3">
            <img class="img-fluid mx-auto d-block img-thumbnail" src="img/programming-g876d2c747_1920.png" alt="">
          </div>
        </div>
        <div class="text-center col-lg-6">
          <div class="mt-3">
            <h2>
              <span class="fw-bold">A propos de</span>
              WebDev72
            </h2>
            <h3 class="mt-4">Hello!
              <span class="text-custom fw-bold">Je suis Cédric.</span>
            </h3>
            <p class="text-muted mt-4">
              Passionné d'informatique depuis longtemps, j'ai commencé à m'interesser au code il y a quelques années, et plus particulièrement au <span class="text-custom fw-bold">développement web</span>.
            </p>
            <p class="text-muted mt-2">
              Je vous propose de mettre mes compétences à votre service afin de <span class="text-custom fw-bold">donner de la visibilité à votre activité</span>.
            </p>
            <p class="text-muted mt-2">
              N'hésitez pas à me contacter, afin d'échanger sur <span class="text-custom fw-bold">votre projet</span>.
            </p>
            <div>
              <ul class="mb-0 about-social list-inline mt-4">
                <li class="list-inline-item">
                <a href="https://github.com/Cedric72-web" target="_blank">
                  <i class="bi bi-github"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" target="_blank">
                  <i class="bi bi-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" target="_blank">
                  <i class="bi bi-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" target="_blank">
                  <i class="bi bi-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End About-->

  <!--Start Skills -->
  <section id="skills" class="section">
    <div class="row text-center mt-5 mb-5 col-lg-6 mx-auto">
      <h2 class="text-custom">Mes compétences</h2>
      <p class="text-secondary">Retrouvez ici mes compétences de développeurs, qui sont appelées à changer régulièrement, car je me forme continuellement, pour rester à la pointe de la technologique.</p>
      <div class="mt-4 row row-cols-1 row-cols-sm-2 row-cols-md-3 all-competences p-0 m-0">
        <div class="p-3">
          <div class="card bg-dark p-3 border-light h-100">
            <i class="icon-html-five2"></i>
            <div class="card-body">
              <h5 class="card-title">HTML 5</h5>
              <div class="services-title-border"></div>
              <p class="card-text">Le langage de base du développement Web. C'est lui qui permet à votre naviguateur internet d'intégrer le contenu de votre site.</p>
            </div>
            <div class="card-footer text-danger">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
            </div>
          </div>
        </div>
        <div class="p-3">
          <div class="card bg-dark p-3 border-light h-100">
            <i class="icon-css31 text-primary"></i>
            <div class="card-body">
              <h5 class="card-title">CSS 3</h5>
              <div class="services-title-border"></div>
              <p class="card-text">Deuxième langage de base du développement Web, Le CSS permet de faire la mise en page de votre site.</p>
            </div>
            <div class="card-footer text-danger">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
            </div>
          </div>
        </div>
        <div class="p-3">
          <div class="card bg-dark p-3 border-light h-100">
            <i class="icon-javascript text-warning"></i>
            <div class="card-body">
              <h5 class="card-title">JavaScript</h5>
              <div class="services-title-border"></div>
              <p class="card-text">Ce langage permet de dynamiser votre site, afin de le rendre "intéractif", en ajoutant des évenements, des animations, etc...</p>
            </div>
            <div class="card-footer text-danger">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <i class="bi bi-star"></i>
            </div>
          </div>
        </div>
        <div class="p-3">
          <div class="card bg-dark p-3 border-light h-100">
            <img src="" alt="" class="img-top">
            <div class="card-body">
              <h5 class="card-title">React</h5>
              <div class="services-title-border"></div>
              <p class="card-text">L'un des framework JavaScript les plus utilisé, il sert notamment à créer des applications mobiles adaptables sur toutes plateformes (bureaux, Ios, Android).</p>
            </div>
            <div class="card-footer text-danger">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <i class="bi bi-star"></i>
              <i class="bi bi-star"></i>
            </div>
          </div>
        </div>
        <div class="p-3">
          <div class="card bg-dark p-3 border-light h-100">
            <img src="" alt="" class="img-top">
            <div class="card-body">
              <h5 class="card-title">Php</h5>
              <div class="services-title-border"></div>
              <p class="card-text">Le langage qui permet à votre application de communiquer avec votre serveur et sa base de données, pour des applications plus complexes.</p>
            </div>
            <div class="card-footer text-danger">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <i class="bi bi-star"></i>
            </div>
          </div>
        </div>
        <div class="p-3">
          <div class="card bg-dark p-3 border-light h-100">
            <img src="" alt="" class="img-top">
            <div class="card-body">
              <h5 class="card-title">Symfony</h5>
              <div class="services-title-border"></div>
              <p class="card-text">L'un des framework Php les plus utilisé, Symfony permet de créer des applications de plus en plus complexes (sites de ventes en ligne, site de réservation, etc...).</p>
            </div>
            <div class="card-footer text-danger">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <i class="bi bi-star"></i>
              <i class="bi bi-star"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Skills -->

  <!--Start Dispo -->
  <section class="py-5 text-center" id="available">
    <h2 class="pb-3 text-custom">Je suis disponible en tant que freelance</h2>
    <p>
      <button class="btn btn-danger">Me contacter</button>
    </p>
  </section>
  <!--End Dispo -->

  <!--Start Témoignages -->
  <section class="py-5 text-center" id="temoignage">
    <h2 class="mb-5 text-custom">Témoignages</h2>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators mb-0" style="bottom: -30px;">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/testi-1.jpg" class="d-block m-auto rounded-circle img-thumbnail" alt="...">
          <div class="py-3">
            <p class="temoignage-text"><i>"Some representative placeholder content for the first slide."</i></p>
            <p class="auteur-temoignage">Théo DELEAUNE</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/testi-2.jpg" class="d-block m-auto rounded-circle img-thumbnail" alt="...">
          <div class="py-3">
            <p class="temoignage-text"><i>"Some representative placeholder content for the first slide."</i></p>
            <p class="auteur-temoignage">Théo DELEAUNE</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/testi-3.jpg" class="d-block m-auto rounded-circle img-thumbnail" alt="...">
          <div class="py-3">
            <p class="temoignage-text"><i>"Some representative placeholder content for the first slide."</i></p>
            <p class="auteur-temoignage">Théo DELEAUNE</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <!--Start Témoignages -->

  <!-- Start Mes réalisations -->
  <section class="py-5 text-center" id="realisations">
    <div class="container">
      <h2 class="pb-3 text-custom">Mes réalisations</h2>
      <div class="row row-cols-1 row-cols-md-3 px-3">
        <div class="realisation-container p-3">
          <img class="realisation-img" src="./img/fondDev.jpg" alt="">
          <p class="realisation-text py-2">Site google</p>
        </div>
        <div class="realisation-container p-3">
          <img class="realisation-img" src="./img/fondDev.jpg" alt="">
          <p class="realisation-text py-2">Site google</p>
        </div>
        <div class="realisation-container p-3">
          <img class="realisation-img" src="./img/fondDev.jpg" alt="">
          <p class="realisation-text py-2">Site google</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Mes réalisations -->

  <!-- Start Contact -->
  <section class="py-5" id="contact">
    <div class="container">
      <h2 class="pb-3 text-custom text-center">Contactez-moi</h2>
      <div class="row row-cols-1 px-3">
        <form id="contact-form" action="post_contact.php" method="POST">
          <div class="row my-3">

              <div class="col-md-6 my-3">
                <label for="name" class="form-label">Nom :<span class="text-custom"> *</span></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom">
                <span class="text-custom" id="nameErrorMessage"></span>
              </div>

              <div class="col-md-6 my-3">
                <label for="firstname" class="form-label">Prénom :<span class="text-custom"> *</span></label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Votre prénom">
                <span class="text-custom" id="firstnameErrorMessage"></span>
              </div>

              <div class="col-md-6 my-3">
                <label for="company" class="form-label">Entreprise / association :</label>
                <input type="text" class="form-control" id="company" name="company" placeholder="Votre entreprise ou association">
              </div>

              <div class="col-md-6 my-3">
                <label for="mail" class="form-label">Adresse mail :<span class="text-custom"> *</span></label>
                <input type="mail" class="form-control" id="mail" name="mail" placeholder="Votre adresse email">
                <span class="text-custom" id="mailErrorMessage"></span>
              </div>
            </div>
            <div class="cols md-6 my-3">
              <label for="message" class="form-label">Votre message :<span class="text-custom"> *</span></label>
              <textarea class="form-control" id="message" name="message" rows="3" placeholder="Votre message"></textarea>
              <span class="text-custom" id="messageErrorMessage"></span>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="agree">
              <label class="form-check-label" for="gridCheck">
                J'accèpte la politique de confidentialité.<span class="text-custom"> *</span>
                <span class="text-custom" id="agreeErrorMessage"></span>
              </label>
            </div>
            <div>
              <p class="small-text">Les champs<span class="text-custom"> * </span> sont obligatoires</p>
            </div>
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-danger">Valider</button>
            </div>
        </form>
      </div>
    </div>
  </section>
  <!-- End Contact -->

  <!-- Start back to home button -->
  <a id="scroll-top-button" class="btn-scroll" href="#home">
    <i class="bi bi-chevron-double-up"></i>
  </a>
  <!-- Start back to home button -->
</main>
  
  <!-- Import Typewriter -->
  <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>

  <!-- Import Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  <script src="script.js"></script>

</body>
</html>