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


        <select name="tri" class="AccueilTri">

            <option value="Date(récent)">Date (récent)</option>
            <option value="Date(ancien)">Date (ancien)</option>

        </select>


        <img class="logoAccueil" src="view/content/img/logoPintEdit.png"/>

        <a class="AccueilBouton" href="Account.php"> Compte </a>

        <h1 class="centerTitreAccueil">PintEdit</h1>

        <h3 class="AccueilTrierPar"> Trier Par  </h3>

        <h4 class="AccueilFiltre"> Filtre</h4>

    </div>

<div class="grilleAccueil">

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
