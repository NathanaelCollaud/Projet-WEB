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
<?php foreach (json_decode(file_get_contents("../src/data/album.json",false))->{"Albums"}[$_GET['album']]->{"Image"} as $test){


echo '<div class=zoom>
    <div class=image>
            <img class="galleryImage"  src="'.
   unCryptJsonDataAlbum($_GET['album'])[$count].'" />

       


    </div>
</div>';
$count++;}?>
    <div  class="RognageObservation">
        <img src="view/content/img/pink-contem-girl.jpg" class="imgObservation">
    </div>

    <div>

    </div>

    <div>

    </div>

</body>





<?php
$content = ob_get_clean();
require "gabarit.php";

