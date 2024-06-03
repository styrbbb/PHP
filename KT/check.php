<?php

set_error_handler(function (int $errno, string $errstr) {
    if ((strpos($errstr, 'Undefined array key') === false) && (strpos($errstr, 'Undefined variable') === false)) {
        return false;
    } else {
        return true;
    }
}, E_WARNING);

//Kasutajanimed ja paroolid
$kasutajad = [
    "admin" => "admin"
];

//Login sessioon
//session_start();

//Kasutajanime ja parooli kontroll logimisel
if (isset($_POST['login']) && !isset($_SESSION['login'])) {

    if ($kasutajad[$_POST['login']] == $_POST['pass']) {

        $_SESSION['login'] = $_POST['login'];
    }
}

//Kui on vigane või vale pass/kasutajanimi
if (isset($_SESSION['login'])) {
    $error = true;
}

//Kui sisselogimine õnnestus
if (isset($_SESSION['login'])) {
    header("location: admin.php");
    exit();
}

?>