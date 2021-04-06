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
<<<<<<< Updated upstream
=======

echo $_GET['image0Home'];

$test = 'view/content/img/logoPintEdit.png'

>>>>>>> Stashed changes
?>

    <body>

    <div>
        <img src="view/content/img/logoPintEdit.png"/>

        <h1 class="centerTitreAccueil">PintEdit</h1>
<<<<<<< Updated upstream
=======

        <h3 class="AccueilTrierPar"> Trier Par  </h3>

        <h4 class="AccueilFiltre"> Filtre</h4>

    </div>

<div class="grilleAccueil">

    <div class=zoom>
        <div class=image>
            <a href="observation.php">
            <img class=""  src="<?php echo $test  ?>"  />
                </a>
        </div>
    </div>

    <div class=zoom>
        <div class=image>
            <a href="observation.php">
            <img class="" src="<?php echo $_GET['image0Home']?>"/>
            </a>
        </div>
    </div>

    <div class=zoom>
        <div class=image>
            <a href="observation.php">
            <img class="" src="view/content/img/logoPintEdit.png" />
            </a>
        </div>
    </div>

    <div class=zoom>
        <div class=image>
            <a href="observation.php">
            <img class="" src="<?php $_SESSION["dataHomeImage"][3]?>"/>
            </a>
        </div>
>>>>>>> Stashed changes
    </div>




    </body>





<?php
$content = ob_get_clean();
require "gabarit.php";
