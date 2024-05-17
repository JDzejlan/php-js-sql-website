<?php
session_start();

function isLoggedIn() {
    return isset($_SESSION['korisnik_sesija']);
}

function getLoginStatus() {
    $response = array();
    $response['isLoggedIn'] = isLoggedIn() ? true : false;
    return json_encode($response);
}

echo getLoginStatus();
?>