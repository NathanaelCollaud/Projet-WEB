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


<body >
<?php
$count=0;
foreach (json_decode(file_get_contents("../src/data/album.json",false))->{"Albums"}[$_GET['album']]->{"Image"} as $test){


echo '
    <div class=observation>
            <img class="observation"  src="'
   .$test.'" />

       


    </div>
';
$count++;}?>








</body>





<?php
$content = ob_get_clean();
require "gabarit.php";

