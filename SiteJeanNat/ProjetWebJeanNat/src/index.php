<?php
/**
 * @file      index.php
 * @brief     This file is the rooter managing the link with controllers.
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

session_start();



require "controler/users.php";
require "controler/navigation.php";
require "controler/controler.php";
require "model/usersManager.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;
        case 'login' :
            login($_POST);
            break;
        case 'logout' :
            logout();
            break;
        case 'register' :
            register($_POST);
            break;
        case "observation0" :
            observation(0);
            break;
        case "observation1" :
            observation(1);
            break;
        case "observation2" :
            observation(2);
            break;
        case "observation3" :
            observation(3);
            break;
        case "observation4" :
            observation(4);
            break;
        case "observation5" :
            observation(5);
            break;
        case "observation6" :
            observation(6);
            break;
        case "observation7" :
            observation(7);
            break;
        case "observation8" :
            observation(8);
            break;

        default :
            lost();
    }
} else {
    home();
}