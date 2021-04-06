<?php
/**
 * @file      navigation.php
 * @brief     This controller is designed to manage all navigation aspect (view controller view)
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

/**
 * @brief This function is designed to redirect the user to the home page (depending on the action received by the index)
 */
<<<<<<< Updated upstream
function home()
{
    require "view/home.php";
}

=======
session_start();


function home()
{

$_GET['image0Home'] = unCryptJsonDataAlbum(1);
echo "test";
echo $_GET['image0Home'];
    require "view/home.php";
}

function observation(){



}

>>>>>>> Stashed changes
/**
 * @brief This function is designed to inform the user that the resource requested doesn't exist (i. e. if the user modify the url manually)
 */
function lost()
{
    require "view/lost.php";
}