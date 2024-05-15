<?php
require 'C:\xampp\php\php.ini';

$msg = "First line of text\n Second line of text";

$msg = wordwrap($msg, 70);

mail("jahicplast@gmail.com", "My subject", $msg);
?>
