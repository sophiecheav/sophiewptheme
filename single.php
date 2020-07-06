<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Vos meilleurs moments en concert</title>
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
        <li><a href="front-page.html">Accueil</a></li>
        <li><a href="index.html" class="active">Blog</a></li>
        <li><a href="page.html">Page</a></li>
        <li><a href="single.html">Article</a></li>
      </ul>
    </nav>
    <nav class="navigation navigation-top mobile-navigation">
      <ul>
        <li class="mobile-menu"><i class="fa fa-bars fa-1x"></i>
          <ul class="sub-navigation">
            <li><a href="front-page.html">Accueil</a></li>
            <li><a href="index.html" class="active">Blog</a></li>
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
  <main class="container site-content">
      <article class="entry single">
        <header class="entry-header">
          <section class="entry-metadata">
            <section class="entry-data">
              <h4 class="author"><a href="#">Ada Lovelace</a></h4>
              <h6 class="publish-date">29 juin 2020</h6>
              <h5 class="entry-category"><a href="#">Actualité</a></h5>
              <h4 class="comments-number"><i class="fas fa-comment"></i> 3 commenatires</h4>
            </section>
            <h2 class="entry-title">Vos meilleurs moments en concert</h2>
          </section>
          <img src="./assets/images/joey-thompson-unsplash.jpg" alt="Foule"
          class="featured-image">
        </header>
        <section class="entry-content">
          <p>
            Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deseru mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
            do eiusmod tempor incididunt…
          </p>

          <p>
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
            aut fugit, sed quia consequuntur magni dolores eos qui ratione
            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem i
            psum quia dolor sit amet, consectetur, adipisci velit, sed quia
            non numquam eius modi tempora incidunt ut labore et dolore magnam
            aliquam quaerat voluptatem.
          </p>

          <p>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
            quae ab illo inventore veritatis et quasi architecto beatae vitae
            dicta sunt explicabo.
          </p>

          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur.
          </p>
        </section>
        <footer class="entry-footer">
          <section class="author-card">
            <section class="author-thumbnail">
              <img src="./assets/images/logo-rock-band.png" alt="Photo de l'auteur" class="author-picture">
            </section>
            <section class="author-metadata">
              <h3 class="author-meta-name">Ada Lovelace</h3>
              <p class="author-meta-description">
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                aut fugit, sed quia consequuntur magni dolores eos qui ratione
                voluptatem sequi nesciunt.
              </p>
            </section>
          </section>
          <nav class="navigation pagination entry-pagination">
            <ul>
              <li><a href="#"><i class="fas fa-arrow-left"></i> Nos 5 meilleurs souvenirs en concert</a></li>
              <li><a href="#">Comment bien préparer un concert en 3 étapes<i class="fas fa-arrow-right"></i></a></li>
            </ul>
          </nav>
          <section class="comments">
            <h3 class="comments-title">3 commentaires pour "Vos meilleurs moments en concert"</h3>
            <p>Ici : liste des commentaires de l'article</p>
            <h3 class="comments-title">Laisser un commentaire</h3>
            <form class="comment-form" action="index.html" method="post">
              <label for="name">Nom</label>
              <input type="text" name="name" required>
              <label for="email">E-mail</label>
              <input type="email" name="email" required>
              <label for="comment">Commentaire</label>
              <input type="textarea" rows="10" cols="80" name="comment" required>
              <input type="submit" name="submit" value="Envoyer">
            </form>
          </section>
        </footer>
      </article>
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
