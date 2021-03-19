<?php
/**
 * @file      gabarit.php
 * @brief     This view is designed to centralize all common graphical component like header and footer (will be call by all views)
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY & Pascal BENZONANA
 * @version   03-MAY-2020
 */

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?=$title; ?></title>
    <meta charset="UTF-8">

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--
    Next Level CSS Template
    https://templatemo.com/tm-532-next-level
    -->
    <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="view/content/css/all.min.css" />
    <link rel="stylesheet" href="view/content/css/bootstrap.min.css" />
    <link rel="stylesheet" href="view/content/css/templatemo-style.css" />
    <link rel="stylesheet" href="view/content/css/manualCssAdds.css"
</head>
<body>


<div class="orangeMargin"> </div>






<?=$content; ?>



<script src="view/content/js/jquery.min.js"></script>
<script src="view/content/js/parallax.min.js"></script>
<script src="view/content/js/bootstrap.min.js"></script>
</body>
</html>