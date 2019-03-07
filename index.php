<!doctype html>
<html lang="fr">
    <head>
        <?php include 'partials/head.php'; ?>
        <title>Titre</title>
        <meta name="description" content="Description de la page" />
    </head>

    <body>
      <div class="wrapper">

        <header class="page-head">
          <div class="container-header">

            <div class="container-menu">
              <div class="logo">
                <img src="images/logo.png" alt="Logo Power Freak" width="auto" height="40vh"/>
              </div>

              <nav class="menu">
                <ul>
                  <li><a class="nav-link active" href="./index.php">Le Recyclage</a></li>
                  <li><a class="nav-link" href="./deuxdex.php">A propos</a></li>
                  <li><a class="nav-link" href="./deuxdex.php">Contactez-nous</a></li>
                </ul>
              </nav>
            </div>
            <!-- /container-menu -->

            <div class="container-icons">
                <a href="#">FR <img src="" width="auto" height="30vh" /></a>

                <img src="images/facebook.png" class="icon" alt="Facebook"  width="auto" height="30vh" />
                <img src="images/instagram.png" class="icon" alt="Instagram"  width="auto" height="30vh" />
            </div>
            <!-- /container-icons -->
          </div>
          <!-- /container-header -->
        </header>
        <!-- /page-head -->



        <main class="page-content">

          <div class="content container-1">
              <h1>Un an apres sa sortie, </br> <span>POWER FREAK</span> se fait un nouveau <span>ECO-LOOK !</span></h1>
              <div class="picture">
                <img src="images/vs-power-freak.png" alt="" width="auto" height="auto">
              </div>
          </div>
          <!-- /container-1 -->


          <div class="content container-2">

              <img src="images/gout-power-freak.png" alt="" width="auto" height="auto">


            <div class="text">
              <h2>2 saveurs </br> 100% naturelle</h2>

              <details open>
                <summary>En savoir plus</summary>
                <p>35% de jus de fruits, caféine d’origine naturelle, absence de taurine, de colorants, de conservateurs, d’acidifiants et de vitamines artificielles. </p>
              </details>

            </div>

          </div>
          <!-- /container-2 -->


          <div class="content container-3">
            <div class="section-content">


                <h3>Une boisson energisante, <span class="valais">MADE IN VALAIS</span></h3>


              <div class="picture">
                <img src="images/logo-valais.jpg" alt="" width="auto" height="150vh">
              </div>

            </div>
          </div>

        </main>
        <!-- /page-content -->

        <footer class="page-foot">
          <div class="content-foot">

  							<ul class="infos">
  								<li class="title">POWER FREAK</li>
  								</br>
  								<li><a href="#">Le recyclage, une priorité</a></li>
                  </br>
                  <li><a href="#">Histoire</a></li>
                  </br>
                  <li><a href="#">Shop</a></li>
  							</ul>

  							<ul class="infos">
  								<li class="title">CONTACT</li>
  								</br>
  								<li><a href="#">HES-SO RECTORAT</br>ROUTE DE MOUTIE 14</br>2800 - DELEMONT </a></li>
                  </br>
                  <li><a href="#">Facebook</a></li>
                  </br>
                  <li><a href="#">Instagram</a></li>
  							</ul>

  						</div>

          </div>

          <div class="copyright">
            <ul class="infos-copyright">
              <li>© Copyright</li>
              <li>Mentions légales</li>
              <li>Tout droits réservés</li>
            </ul>
          </div>
          <!-- /copyright -->

        </footer>
        <!-- /page-foot -->

      </div>
      <!-- FIN DU WRAPPER -->


      <script>
          $( function() {
            $( "#accordion" ).accordion();
          } );
      </script>

    </body>

</html>
