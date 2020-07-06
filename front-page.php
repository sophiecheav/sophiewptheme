<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Accueil</title>
  <link rel="stylesheet" href="./assets/css/style.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@0;1&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/4e5f136f21.js" crossorigin="anonymous"></script>
  <script src="./assets/js/main.js" type="text/javascript"></script>
</head>
<body>
  <header class="site-header">
    <div class="site-branding">
      <a href="index.html"><img src="./assets/images/logo-rock-band.png" alt="Logo du site"></a>
    </div>
    <nav class="navigation navigation-top desktop-navigation">
      <ul>
        <li><a href="front-page.html" class="active">Accueil</a></li>
        <li><a href="index.html">Blog</a></li>
        <li><a href="page.html">Page</a></li>
        <li><a href="single.html">Article</a></li>
      </ul>
    </nav>
    <nav class="navigation navigation-top mobile-navigation">
      <ul>
        <li class="mobile-menu"><i class="fa fa-bars fa-1x"></i>
          <ul class="sub-navigation">
            <li><a href="front-page.html" class="active">Accueil</a></li>
            <li><a href="index.html">Blog</a></li>
            <li><a href="page.html">Page</a></li>
            <li><a href="single.html">Article</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <nav class="navigation navigation-aside">
      <ul>
        <li class="search-toggle">
          <a href="#"><i class="fas fa-search"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-shopping-cart"></i>
            <span class="count cart-counter">0</span>
          </a>
        </li>
      </ul>
    </nav>
    <section class="search-popup">
      <form class="search-form" action="index.html" method="post">
        <input type="text" name="search" value="" placeholder="Tapez quelque chose...">
        <input type="submit" name="submit" value="Rechercher">
      </form>
    </section>
  </header>
  <section class="page-header front-page-header">
    <h1 class="page-title">Bientôt en concert</h1>
    <a href="#">
      <button type="button" class="call-to-action">
        Réserver mon billet
      </button>
  </a>
  </section>
  <main class="container front-content">
    <section class="custom-presentation">
      <img src="./assets/images/yannis-papanastasopoulos-unsplash.jpg" alt="">
      <div class="custom-presentation-infos">
        <h2 class="custom-title">Un super groupe de musique</h2>
        <p class="custom-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.

          Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
          quae ab illo inventore veritatis et quasi architecto beatae vitae
          dicta sunt explicabo.

          Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat
          nulla pariatur.
        </p>
        <a href="page.html">
          <button type="button" class="call-to-action">En savoir plus</button>
        </a>
      </div>
    </section>
    <section class="custom-blocks">
      <div class="custom-block">
        <i class="fas fa-birthday-cake fa-3x"></i>
        <h3 class="custom-title">Concert célébration</h3>
        <p class="custom-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="custom-block">
        <i class="fas fa-music fa-3x"></i>
        <h3 class="custom-title">L'amour de la musique</h3>
        <p class="custom-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="custom-block">
        <i class="fas fa-ticket-alt fa-3x"></i>
        <h3 class="custom-title">+3000 tickets en vente</h3>
        <p class="custom-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
    </section>
    <section class="custom-section">
      <blockquote class="star-quote">
        <p class="quote-content">
          Ce qui se conçoit bien s'énonce clairement et les mots pour le dire
          arrivent aisément.
        </p>
        <cite class="quote-footer">
          Boileau
        </cite>
      </blockquote>
    </section>
  </main>
  <footer class="site-footer">
    <section class="widgets-sections container">
      <div class="widgets-section widgets-section-1">
        <h4 class="widget-title">Zone de widgets 1</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="widgets-section widgets-section-2">
        <h4 class="widget-title">Zone de widgets 2</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="widgets-section widgets-section-3">
        <h4 class="widget-title">Zone de widgets 3</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="widgets-section widgets-section-4">
        <h4 class="widget-title">Zone de widgets 4</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
    </section>
    <section class="footer-infos container">
      <div class="copyright">
        <p>© 2020 Descodeuses. Tous droits réservés.</p>
      </div>
      <div class="social-medias">
        <nav class="navigation navigation-bottom">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="index.html">Blog</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>
    </section>
  </footer>
</body>
</html>
