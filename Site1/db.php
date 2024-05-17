<?php

$dsn = 'mysql:host=localhost;dbname=ventepc';
$username = "root"; 
$password = "bismiL@hiRahman"; 
$options = [];

try {
    
    $connexion = new PDO($dsn, $username, $password, $options);
 

    
} catch (PDOException $e) {
    
    
}

?>
