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

    <body>

    <div>
        <img src="view/content/img/logoPintEdit.png"/>

        <h1 class="centerTitreAccueil">PintEdit</h1>
    </div>




    </body>





<?php
$content = ob_get_clean();
require "gabarit.php";
