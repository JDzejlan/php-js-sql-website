<?php
session_start();

$response = array();

if(isset($_SESSION['korisnik_sesija'])) {
    $response['isLoggedIn'] = true;
} else {
    $response['isLoggedIn'] = false;
}

header('Content-Type: application/json');
echo json_encode($response);
?>
