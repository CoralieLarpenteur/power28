<!DOCTYPE html>
<html>
  <head>
    <?php require_once 'tools/head.php'; ?>
    <title></title>
  </head>
  <body>
    <?php require_once 'tools/nav.php'; ?>
      <div class="row noMargin">
        <div class="col-7">
          <img class="img-fluid" style="margin:30px 0px 30px 0px" src="assets/img/Power28-accueil(3).png" alt="home page application">
        </div>
        <div class="col-5">
          <div class="card" style="margin:30px 0px 30px 0px">
            <div class="card-header">
              Power28
            </div>
            <div class="card-body">
              <h5 class="card-title right">1200€ H.T.</h5>
                <ul class="card-text">
                  <li>Licence unique par site, par entreprise.</li>
                  <li>Nombre d'utilisateurs illimités.</li>
                  <li>Formation de vos collaborateurs possible.</li>
                  <li>Hébergement de votre base de donnée non inclus</li>
                </ul>
              <form class="card-text" action="application.php" method="post">
                <table style="width:100%">
                  <tr>
                    <th>
                      <label for="Check1">
                        ebergement <a href="#" data-trigger="hover focus" data-html="true" data-toggle="popover" data-placement="right" data-content="
                          Nous sommes spécialisés dans l’hébergement de bases de données FileMaker depuis 2010. Nous utilisons une
                          infrastructure moderne et flexible permettant de réduire les coûts tout en offrant une disponibilité maximale et
                          une rapidité de connexion concurrentielle. </br>
                          En choisissant votre hébergement auprès de Power28, vous faites le choix d’un prix bas, d’une qualité de réseau
                          renforcée et d’une sécurité accrue car nous sauvegardons toutes nos bases de données toutes les 2 heures, tous
                          les jours, toutes les semaines et tous les mois, sur 2 sites distants afin d’éviter toute perte de données.</br>
                          <i class='fal fa-exclamation-triangle fa-1'></i>le prélèvement ce ferra annuelement.
                        "><i class="fal fa-info-circle fa-1x"></i></a>
                      </label>

                    </th>
                    <td class="center">49€<sub>/mois</sub> H.T.</td>
                    <td class="center" style="width:40px">
                      <input type="checkbox" value="" onclick="myFunction()" id="Check1">
                    </td>
                  </tr>
                  <?php $price=1200 ?>
                  <tr>
                    <th>
                      <label for="Check3">
                        formation <a href="#" data-trigger="hover focus" data-html="true" data-toggle="popover" data-placement="right" data-content="Content"><i class="fal fa-info-circle fa-1x"></i></a>
                      </label>
                    </th>
                    <td class="center">20€<sub>/jour</sub></td>
                    <td class="center" style="width:40px">
                      <input type="checkbox" value="" onclick="myFunction()" id="Check2">
                    </td>
                  </tr>
                  <tr>
                    <th>
                      <label for="Check2">
                        lecteur de code barre <a href="#" data-trigger="hover focus"data-html="true"  data-toggle="popover" data-placement="right" data-content="Content"><i class="fal fa-info-circle fa-1x"></i></a>
                      </label>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <label for="Check3">
                        imprimante d'étiquette <a href="#" data-trigger="hover focus" data-html="true" data-toggle="popover" data-placement="right" data-content="
                        Pour l'impression de vos étiquettes nous vous recommandons le modèle d'imprimante suivant :<a href='http://www.dymo.com/fr-FR/labelwriter-450-label-printer' target='blank'>LabelWriter™ 450</a>
                        "><i class="fal fa-info-circle fa-1x"></i></a>
                      </label>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <label for="Check3">
                        étiquette <a href="#" data-toggle="popover" data-trigger="hover focus" data-html="true" data-placement="right" data-content="
                         Pour vos étiquettes nous vous recommandons les suivantes :<a href='https://www.dymo.eu/dymo-11352-returnaddress-labels-25x54mm.html' target='blank'>Dymo 11352</a>
                        "><i class="fal fa-info-circle fa-1x"></i></a>
                      </label>
                    </th>
                  </tr>

                </table>
                <h5 class="card-title right">Prix total : <span id="price"><?php echo $price; ?></span>€ </h5>
              </form>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>




    <?php require_once 'tools/footer.php'; ?>

    <script>
    function myFunction() {
        var x = document.getElementById("Check1").checked;
        var y = document.getElementById("Check2").checked;
        if (x == true && y == true) {
          document.getElementById("price").innerHTML = <?php echo $price ?> + 65;
        }else if (x == true) {
          document.getElementById("price").innerHTML = <?php echo $price ?> + 49;
        }else if (y == true) {
          document.getElementById("price").innerHTML = <?php echo $price ?> + 20;
        }else {
          document.getElementById("price").innerHTML = <?php echo $price ?>;
        }
    }
    </script>
  </body>
</html>
