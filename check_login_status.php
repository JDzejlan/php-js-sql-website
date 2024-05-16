<?php
session_start();

/**
 * Let's think a bit about what this part of the code is actually doing.
 * 1. You define some variable $response
 * 2. Check if inside of $_SESSION global var is set cerain "korisnik_sesija" value
 *     ==> If it is, you set $response['isLoggedIn'] to true
 *     ==> If it's not, you set it to false.
 * 
 * How can we do this in a more elegant way? A function maybe?
 * 
 * If we can write it as a function, would we still do `echo json_encode()` and than again rely on calling it from .JS
 *  or we can call this new php function directly in other PHP code?
 * 
 * 
 */
$response = array();

if (isset($_SESSION['korisnik_sesija'])) {
    $response['isLoggedIn'] = true;
} else {
    $response['isLoggedIn'] = false;
}

header('Content-Type: application/json');
echo json_encode($response);
?>