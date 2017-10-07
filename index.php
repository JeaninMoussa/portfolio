<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PORTFOLIO_CHOW-BOY</title>
    <script src="js/jquery/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css/normalize.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/main.js"></script>

    <!-- localscroll -->
    <script type="text/javascript" src="js/localscroll/jquery.scrollTo-min.js"></script>
    <script type="text/javascript" src="js/localscroll/jquery.localScroll.min.js"></script>
    <script type="text/javascript" src="js/lancement/lancement.js"></script>
  </head>

  <body>
    <header>
      <nav id="navigation">
        <a href="#index"><i class="fa fa-home fa-2x" aria-hidden="true"></i>Home</a>
        <a href="#talk"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i>About me</a>
        <a href="#work"><i class="fa fa-folder-open fa-2x" aria-hidden="true"></i>Work</a>
        <a href="#contact"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i>Contact</a>
        <a href="cv.php"><i class="fa fa-file-text fa-2x" aria-hidden="true"></i>CV</a>
      </nav>
    </header>
    <main>

        <div id="index" class="titre">


          <h1> INTÉGRATEUR ET DÉVELOPPEUR D'APPLICATION WEB JUNIOR</h1>
          <p>Bienvenue chez Jeanin MOUSSA</p>


        </div>


    <section id="talk" class="a-propos">
                                                                  <h2>ABOUT ME</h2>
          <article class="text">
            <div class="">
                                          <h3>Qui suis-je</h3>
              <p>Je m'appelle Jeanin MOUSSA, je suis un intégrateur et développeur d'application web junior.
                 Suite à une réorientation professionnelle dans le numérique j'ai pu apprendre et découvrir de nouvelles choses
               en intégrant la 3W Académy pour débuter dans le codage et connaitre les différents langages. </p>
            </div>
            <div class="">
                  <h3>Parcours professionnel</h3>
                  <ul>
                    <li>Développeur Web et Mobile <br>
                    Titre RNCP NIVEAU II (en cours)</li> <br><br>
                    <li>Développeur Intégrateur web <br>
                    Titre RNCP NIVEAU III</li> <br><br>
                    <li>BTS MI (Maintenance Indsutrielle)</li>
                  </ul>
            </div>
            <div class="">
                  <h3>Compétences en cours d'acquisition</h3>

                  <ul>
                    <li>Symfony</li> <br>
                    <li>Boostrap</li> <br>
                    <li>SASS</li>
                  </ul>
            </div>
        </article>
          <aside class="competences">
            <img src="image/HTML-5.png" alt="photo">
            <img src="image/css-3.png" alt="photo">
            <img src="image/JS-1.png" alt="photo">
            <img src="image/PHP-1.png" alt="photo">
            <img src="image/Mysql-1.png" alt="photo">
          </aside>
    </section>

    <section id="work" class="maquette">
                                                                  <h2>WORK</h2>
        <!--<p>Voici quelques travaux réalisées pendant la formation à la 3W Académy sur la premiére ligne nous avons fait de l'intégration avec du HTML5 et CSS3.
        La deuxiéme ligne, c'est du développement avec du PHP et Javascript. </p>-->

            <div id="box1" class="carre">
            <a href="Green Office/index.html"><img id="greenoffice" class="rectangle" src="image/maquette/img8.jpg" alt="maquette"></a>
            </div>
            <div id="box2" class="carre">
              <a href="Creasoul/index.html"><img id="creasoul"class="rectangle2"  src="image/maquette/creasoul.png" alt="maquette"></a>
            </div>
            <div id="box3" class="carre">
              <a href="Wolf Gang/index.html"><img id="wolfgang" class="rectangle3" src="image/maquette/img7.png" alt="maquette"></a>
            </div>
            <div id="box4" class="carre">
              <a href="Ila Yoga 1/index.html"><img id="yoga" class="rectangle4" src="image/maquette/img6.jpg" alt="maquette"></a>
            </div>

                                                      <span id="spans"></span>

            <div id="box5" class="carre">
              <a href="Carnet d'addresse/address-book.html"><img id="carnet" class="rectangle5" src="image/carnet.png" alt="image"></a>
            </div>
            <div id="box6" class="carre">
              <a href="Gestions de la souris/index.html"><img id="souris" class="rectangle6" src="image/souris.png" alt="image"></a>
            </div>
            <div id="box7" class="carre">
              <a href="Bons_de_commande/index.phtml"><img id="bons" class="rectangle7" src="image/bons.png" alt="image"></a>
            </div>
            <div id="box8" class="carre">
              <a href="blog/layout.phtml"><img id="blog" class="rectangle8" src="image/blog.png" alt="image"></a>
            </div>

    </section>

    <section id="contact" class="contact">
                                                                  <h2>CONTACT</h2>
        <div class="site">
          <a href="#"><i class="fa fa-facebook-official fa-4x" aria-hidden="true"></i></a>
          <a href="https://www.linkedin.com/in/jeanin-moussa/"><i class="fa fa-linkedin-square fa-4x" aria-hidden="true"></i></a>
        <a href="https://github.com/Chow-boy"><i class="fa fa-github-square fa-4x" aria-hidden="true"></i></a>
        </div>
        <form id="formulaire" action="index.php" method="post">

            <div class="fieldset">
              <label for="nom">Nom :</label>
              <input type="text" name="Nom" id="Nom" >
              <label for="prenom">Prénom :</label>
              <input type="text" name="Prenom" id="Prenom" >
              <label for="email">Email :</label>
              <input type="email" name="Email" id="Email" >
              <label for="messages">Messages :</label>
              <textarea name="Messages" rows="8" cols="80" id="Messages" ></textarea>
              <button type="submit" name="button">Envoyer</button>
            </div>
        </form>

      </section>
        <?php include 'base.php'; ?>

    </main>

  </body>
</html>
