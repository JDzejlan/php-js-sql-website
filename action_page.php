<?php
require 'C:\xampp\php\php.ini';

// Definisanje poruke
$msg = "First line of text\n Second line of text";

// Upotreba wordwrap() funkcije ako su linije duže od 70 karaktera
$msg = wordwrap($msg, 70);

// Slanje e-pošte
mail("jahicplast@gmail.com", "My subject", $msg);
?>
