<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Capa </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Logo_CAPA_FondBlanc.png" rel="icon">
  <link href="client/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="client/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="client/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="client/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="client/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="client/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="client/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Updated: Jun 14 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">{{$info->adresse}}</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{$info->contact}}</span></i>
        </div>

      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
          <!-- Uncomment the line below if you also wish to use an image logo -->
           <img src="Logo_CAPA_FondBlanc.png" alt="" class="menu-img">
          <h1 class="sitename">Capa</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Acceuil<br></a></li>
           <!-- <li><a href="#about">Présentation</a></li> -->
            <li><a href="#specials">Qui Sommes Nous</a></li>
            <li><a href="#menu">Nos Produits</a></li>
            <li><a href="#clients">Nos Partenaires</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#contact">Contact</a></li>
            <li> <a href=""  data-bs-toggle="modal" data-bs-target="#loginModal">Se connecter</a> </li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>
    @if(session('message'))
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
    @endif
  </header>
  {{-- modal login --}}
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Connexion</h5>
                <button type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="votre email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="mot de passe" required>
                    </div>

                    <button type="submit" style="background:#f9c900; color:aliceblue;padding:5px;border-radius: 10px;size:5ch" >Connexion</button>
                </form>
            </div>
        </div>
    </div>
</div>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="Logo_CAPA_FondBlanc.png" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-8 d-flex flex-column align-items-center align-items-lg-start">
            <h2 data-aos="fade-up" data-aos-delay="100">Bienvenu à <span>CAPA</span></h2>
            <p data-aos="fade-up" data-aos-delay="200">{{$slides[0]->description}}</p>
            <!--<div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
              <a href="#menu" class="cta-btn">Our Menu</a>
              <a href="#book-a-table" class="cta-btn"  data-bs-toggle="modal" data-bs-target="#loginModal">Book a Table</a>
            </div> -->
          </div>
          <div class="col-lg-4 d-flex align-items-center justify-content-center mt-5 mt-lg-0">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <section id="specials" class="specials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">

        <p>Qui Sommes Nous </p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#specials-tab-1">{{$presentations[0]->titre}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-2">{{$presentations[1]->titre}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-3">{{$presentations[2]->titre}}</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="specials-tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Nos valeur </h3>
                    <p>{{$presentations[0]->description}}</p>
                  </div>
                  <!--<div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="client/assets/img/specials-1.png" alt="" class="img-fluid">
                  </div> -->
                </div>
              </div>
              <div class="tab-pane" id="specials-tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Notre Vision</h3>
                    <p>{{$presentations[1]->description}}</p>
                  </div>

                </div>
              </div>
              <div class="tab-pane" id="specials-tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Notre Mission</h3>
                    <p>{{$presentations[1]->description}}</p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Specials Section -->

    <!-- Menu Section -->
    <section id="menu" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p>Nos Produits</p>
      </div><!-- End Section Title -->

      <div class="container isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul class="menu-filters isotope-filters">
              <li data-filter="*" class="filter-active">Tous les categories</li>
              @foreach ($categories as $categorie)
                <li data-filter=".filter-{{$categorie->categorie}}">{{$categorie->categorie}}</li>
              @endforeach
            </ul>
          </div>
        </div><!-- Menu Filters -->

        <div class="row isotope-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($produits as $produit)
                <div class="col-lg-6 menu-item isotope-item filter-{{$produit->categorie}}">
                    <img src="{{$produit->image}}" class="menu-img" alt="">
                    <div class="menu-content">
                    <a href="#">{{$produit->nom}}</a><span>{{$produit->prix}} f</span>
                    </div>
                    <div class="menu-ingredients">
                    {{$produit->description}}
                    </div>
                </div><!-- Menu Item -->
            @endforeach

        </div><!-- Menu Container -->

      </div>

    </section><!-- /Menu Section -->

     <!-- Why Us Section -->

    <!-- Specials Section -->

    <!-- Events Section -->


    <!-- Testimonials Section -->
    <section id="clients" class="clients section">
        <div class="container section-title" data-aos="fade-up">
            <p>Partenaire</p>
          </div>
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
            @foreach ($partenaires as $partenaire)
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="{{$partenaire->logo}}" class="img-fluid" alt="">
                 </div><!-- End Client Item -->
            @endforeach
        </div>
      </div>

    </section>

    <section id="gallery" class="gallery section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <p>Gallery</p>
        </div><!-- End Section Title -->

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-0">
                @foreach ($gallerys as $gallery)
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                        <a href="{{$gallery->image}}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{$gallery->image}}" alt="" class="img-fluid">
                        </a>
                        </div>
                    </div><!-- End Gallery Item -->
                @endforeach
                </div>
            </div>
      </section><!-- /Gallery Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">

        <p>Contact</p>
      </div><!-- End Section Title -->

      <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 400px;" src="https://maps.app.goo.gl/61AJvE5KNWco8HGF9?g_st=iw" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

      <!--  -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Adresse</h3>
                <p>{{$info->adresse}}</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Heure d'ouverture</h3>
                <p>{{$info->jourOuvert}}:<br>{{$info->heurOuvert}}</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Contact</h3>
                <p>{{$info->contact}}</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email </h3>
                <p>contact@capa.sn</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">


          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="client/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="client/assets/vendor/php-email-form/validate.js"></script>
  <script src="client/assets/vendor/aos/aos.js"></script>
  <script src="client/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="client/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="client/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="client/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="client/assets/js/main.js"></script>

</body>

</html>
