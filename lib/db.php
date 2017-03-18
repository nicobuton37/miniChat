<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=chat', 'root', 'inferno370');
} catch (Exception $e) {
    echo "Une erreur est survenue";
    echo $e->getMessage();
    die();
}
