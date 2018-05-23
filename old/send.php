<?php
$message="Este Correo se ha subscripto :". $_POST["email"];
mail('info@tudexnetworks.com', 'Un nuevo subcriptor', $message);
header('Location: https://www.tudexnetworks.com/');
?>
