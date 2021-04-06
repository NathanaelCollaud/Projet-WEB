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
session_start();
function defineImages(){

    $res = [0,1,2,3,4,5,6,7,8];
    $lienImage = [0,0,0,0,0,0,0,0,0];

    foreach ($res as $value){

        $_SESSION["dataHomeImage"][$value] = unCryptJsonDataAlbum($value);


}
return $lienImage;
}



function home()
{

    $_GET['image0Home'] = unCryptJsonDataAlbum(1);

    require "view/home.php";
}

function observation(){


    require "view/observation.php";
}

/**
 * @brief This function is designed to inform the user that the resource requested doesn't exist (i. e. if the user modify the url manually)
 */
function lost()
{
    require "view/lost.php";
}