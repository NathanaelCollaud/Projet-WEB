<?php

/**
 * @file      observation.php
 * @brief     This view is designed to display the home page
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

ob_start();
$title = "Observation";

?>


<header>
    <div >
        <a href="index.php?action=home">
        <img src="view/content/img/boutonRetour.jpeg" class="observationBoutonRetour">
            </a>
    </div>

    <div>
        <h1 class="titreObservation" > inserer le titre </h1>
    </div>

    <div>
        <a class="lienCompteObservation" href="index.php?action=login"> Compte </a>
    </div>

</header>


<body class="bodyObservation" >

    <div  class="RognageObservation">
        <img src="view/content/img/pink-contem-girl.jpg" class="imgObservation">
    </div>

    <div class="lateraltext">
        <h2>
            Auteur
        </h2>
        <br>
        <h2>
            E-mail
        </h2>
        <br>
        <h2>
            Date
        </h2>
        <br>
        <h2>
            Lieu
        </h2>
        <br>
        <h2>
            Animal(aux)
        </h2>
    </div>

    <div class="mapObservation">
            <h2>map</h2>
    </div>

    <div class="DescriptionObservation">
        <h2>Description</h2>
    </div>

</body>





<?php
$content = ob_get_clean();
require "gabarit.php";

