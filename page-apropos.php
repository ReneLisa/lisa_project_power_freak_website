<!doctype html>
<html lang="fr">
    <head>
        <?php include 'partials/meta.php'; ?>
        <title>Titre</title>
        <meta name="description" content="Description de la page" />
    </head>

    <body>
      <div class="wrapper">

        <?php include("partials/page-head.php"); ?>

        <main class="page-content">

          <div class="content container-1">
              <h1><span>POWER FREAK</span></h1>
              <div class="text">
                <p>C’est le nom de notre nouvelle boisson énergisante 100% naturelle développée en collaboration avec la HES-SO Valais.
                </br>Cette nouvelle boisson « made in Valais » a été accompagnée par des étudiants en technologie alimentaire
                  pour la partie développement de produit et en économie d’entreprise pour la partie marketing et communication.
                </br>
                </br>Elle se distingue de ses concurrentes par sa composition :
                </br>35% de jus de fruits, caféine d’origine naturelle,
                  absence de taurine, de colorants, de conservateurs, d’acidifiants et de vitamines artificielles.</p>
                </br>
              </div>
          </div>
          <!-- /container-1 -->
          <div class="framboise">
            <div class="section-content">
              <h3>A vos papilles et bonne degustation !</h3>
            </div>
          </div>


          <div class="content container-4">
            <div id="accordion">

              <h5>Quelle est la fonctionnalite de <span>POWER FREAK ?</span></h5>
              <div>
              <p>Notre recette est appréciée dans le monde entier par les top athlètes, les étudiants, lorsque l'on est très sollicité ou pour les longs trajets.
                  Si vous voulez en savoir plus sur la composition, contactez-nous.</p>
              </div>

              <h4>En general, quand est-il recommande de boire <span>POWER FREAK ?</span></h4>
              <div>
                <p>Il fait partie de l'équipement incontournable de tous ceux qui sont en période d'activité et qui veulent donner le meilleur d'eux-mêmes.</p>
                <p>Plus d'infos sur quand boire Power Freak, au travail, en faisant du sport, en étudiant, en jouant aux jeux vidéo ou lors de vos sorties.</p>
              </div>

              <h5>Comment et quand consommer <span>Power Freak</span> dans le cadre d'une activite sportive ?</h5>
              <div>
                <p>L'utilisation de Power Freak dans le cadre d'une activité sportive dépend de l'athlète et du type de sport pratiqué. Power Freak peut être consommé avant, pendant ou après une activité sportive.</p>
                <p>Power Freak est une boisson fonctionnelle, qui n'a pas été développée pour réhydrater. De l'eau doit être consommée en complément de Power Freak pendant les activités sportives.</p>
              </div>

              <h4>D’ou vient l’eau de <span>Power Freak ?</span></h4>
              <div>
                <p>Pour garantir toujours la même qualité premium, l’usine de production de Power Freak est située dans les Alpes suisses et autrichiennes. L'eau arrive au moment du printemps, qui apporte une eau des Alpes fraîche et de qualité optimale. Les Alpes constituent l’un des plus grands réservoirs d’eau douce au monde constamment renouvelé.</p>
              </div>

              <h5>"Puissant & Naturel" ? Qu'est-ce que cela signifie ?</h5>
              <div>
                <p>"Puissant & Naturel" décrit le goût unique et le caractère corsé Power Freak, tous deux issus d'ingrédients d'origine 100% naturelle.</p>
              </div>

              <h4>Quelles sont les informations nutritionnelles de <span>Power Freak ?</span></h4>
              <div>
                <p>INFORMATIONES NUTRITIONNELLES pour 100 ml</p>
                <p>35% de jus de fruits, caféine d’origine naturelle,
                  absence de taurine, de colorants, de conservateurs, d’acidifiants et de vitamines artificielles.
                  Tous les ingrédients sont indiqués sur la canette.</p>
              </div>
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

        <?php include("partials/page-foot.php"); ?>

      </div>
      <!-- FIN DU WRAPPER -->
      <script>
        $( function() {
          $( "#accordion" ).accordion();
        } );
      </script>

    </body>

</html>
