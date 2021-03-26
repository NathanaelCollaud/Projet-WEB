<?php
/**
 * @file      home.php
 * @brief     This view is designed to display the home page
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

ob_start();
$title = "Accueil";



?>

    <head>


    </head>

    <body>


    <div>

        <form action="../controler/controler.php" method="post">
        <select name="tri" class="AccueilTri">

            <option value="DateRe" selected >Date (récent)</option>
            <option value="DateAn"          >Date (ancien)</option>

        </select>
        </form>





        <img class="logoAccueil" src="view/content/img/logoPintEdit.png"/>

        <a class="AccueilBouton" href="Account.php"> Compte </a>

        <h1 class="centerTitreAccueil">PintEdit</h1>

        <h3 class="AccueilTrierPar"> Trier par</h3>

        <h4 class="AccueilFiltre"> Filtre</h4>

    </div>

<div class="grilleAccueil">

    <div class=zoom>
        <div class=image>
            <img class="" src="<?php   ?>"    />
        </div>
    </div>

    <div class=zoom>
        <div class=image>
            <img class="" src="view/content/img/map.png"/>
        </div>
    </div>

    <div class=zoom>
        <div class=image>
            <img class="" src="view/content/img/map.png" />
        </div>
    </div>

    <div class=zoom>
        <div class=image>
            <img class="" src="view/content/img/map.png"/>
        </div>
    </div>

    <div class=zoom>
        <div class=image>
            <img class="" src="view/content/img/map.png"/>
        </div>
    </div>

    <div class=zoom>
        <div class=image>
            <img class="" src="view/content/img/map.png"/>
        </div>
    </div>

    <div class=zoom>
        <div class=image>
            <img class="" src="view/content/img/map.png"/>
        </div>
    </div>

    <div class=zoom>
        <div class=image>
            <img class="" src="view/content/img/map.png"/>
        </div>
    </div>

    <div class=zoom>
        <div class=image>
            <img class="" src="view/content/img/map.png"/>
        </div>
    </div>

</div>

    </body>





<?php
$content = ob_get_clean();
require "gabarit.php";
