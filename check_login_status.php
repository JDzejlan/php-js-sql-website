<?php
session_start();

// Pretpostavljamo da je korisnik prijavljen ako postoji 'user_id' u sesiji
$isLoggedIn = isset($_SESSION['korisnik_sesija']);

// Vraćamo JSON odgovor s ključem 'isLoggedIn'
header('Content-Type: application/json');
echo json_encode(['isLoggedIn' => $isLoggedIn]);
?>
