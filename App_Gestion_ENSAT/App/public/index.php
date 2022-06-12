<?php
session_start();
define("ROOT", dirname(__DIR__));
include_once ROOT . " /Models/Model.php";
include_once ROOT . "/Controllers/Controller.php";

// index.php/controller/methodes
// Traitement de l'url 
if (isset($_GET['url'])) {
    $url = $_GET['url'];

    $tabu = explode('/', $url);

    if ($tabu[0] != '') {
        $controlleur = ucfirst($tabu[0]);
        include ROOT . "/Controllers/" . $controlleur . ".php";
        $controlleur = new ($controlleur . "C")($controlleur);

        $methode = (isset($tabu[1])) ? $tabu[1] : 'index';

        if (method_exists($controlleur, $methode)) {
            (isset($tabu[2])) ? $controlleur->$methode($tabu[2]) : $controlleur->$methode();
        } else {
            echo "<div class='alert alert-danger'> methode nexiste pas </div>";
        }
    }
} else {

    $controlleur = new Controller('Model');
    $controlleur->render("Welcome");
}
