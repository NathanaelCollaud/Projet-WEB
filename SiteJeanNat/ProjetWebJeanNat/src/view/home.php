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


        <select name="tri" class="AccueilTri" id="tri">

            <option value="recent">Date (récent)</option>
            <option value="ancien">Date (ancien)</option>

        </select>


        <img class="logoAccueil" src="view/content/img/logoPintEdit.png"/>

        <a class="AccueilBouton" href="index.php?action=login"> Compte </a>

        <h1 class="centerTitreAccueil">PintEdit</h1>


        <h3 class="AccueilTrierPar"> Trier Par  </h3>

        <h4 class="AccueilFiltre"></h4>



      

    </div>

<div class="grilleAccueil">

  
<?php
$count=0;
foreach (json_decode(file_get_contents("../src/data/album.json",false))->{"Albums"} as $test){


    echo '<div class=zoom>
      <div class=image>
            <a href="index.php?action=observation'.$count.'" >
            <img class="galleryImage"  src="'.
   unCryptJsonDataAlbum($count).'" />

                </a>

   
        </div>
    </div>';
$count++;}?>



</div>

    </body>





<?php
$content = ob_get_clean();
require "gabarit.php";
