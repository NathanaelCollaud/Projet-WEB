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
$NIF = "view/content/img/contact-us.jpg";


?>

    <head>

        <script src="/ProjetWebJeanNat/src/data/BaseData.json"></script>

    </head>

    <body>


    <div>

        <select datasrc=""></select>


        <select name="tri" class="AccueilTri">

            <option value="Date(récent)">Date (récent)</option>
            <option value="Date(ancien)">Date (ancien)</option>

        </select>

        <select>



        </select>


        <img src="view/content/img/logoPintEdit.png"/>

        <a class="AccueilBouton" href="Account.php"> Compte </a>

        <h1 class="centerTitreAccueil">PintEdit</h1>

        <h3 class="AccueilTrierPar"> Trier par</h3>

        <h4 class="AccueilFiltre"> Filtre</h4>

    </div>

    <div>


    </div>



    </body>





<?php
$content = ob_get_clean();
require "gabarit.php";
