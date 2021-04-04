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

<div class="grilleObservation">


</div>





<?php
$content = ob_get_clean();
require "gabarit.php";

