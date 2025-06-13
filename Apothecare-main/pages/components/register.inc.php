<?php

if (isset($_POST["register"])) {

    // alle items die worden gepost worden in een apparte variable gezet
    $naam = $_POST["voornaam"];
    $tussenv = $_POST["tussenv"];
    $achternaam = $_POST["achternaam"];
    $email = $_POST["email"];
    $ww = $_POST["ww"];
    $wwrepeat = $_POST["wwrepeat"];

    // include de database connectie en de functies file.
    require_once '../../config/DB_connect.php';
    require_once 'functions.inc.php';

    // als de variable leeg is stuurt de pagina je trug
    if (emptyInputRegister($naam, $achternaam, $email, $ww, $wwrepeat) !== false) {
        echo "<script>window.location.href = '../register.php?error=emptyinput';</script>";
        exit();
    }

    // Als de email geen valid email is stuurt de pagina je terug
    if (invalidEmail($email) !== false) {
        echo "<script>window.location.href = '../register.php?error=invalidemail';</script>";
        exit();
    }

    // Als de wachtwoorden niet het zelfde zijn stuurt de pagina je terug
    if (wwMatch($ww, $wwrepeat) !== false) {
        echo "<script>window.location.href = '../register.php?error=wwnietzelfde';</script>";
        exit();
    }

     // Als de email al bestaat stuurt de pagina je terug
    if (emailExists($conn, $email) !== false) {
        echo "<script>window.location.href = '../register.php?error=emailTaken';</script>";
        exit();
    }

    createUser($conn, $naam, $tussenv, $achternaam, $email, $ww);

} else {
    // stuurt persoon terug als er niks te doen is op deze pagina.
    echo "<script>window.location.href = '../register.php?error=wrongWay';</script>";
    exit();
}

?>