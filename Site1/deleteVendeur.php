<?php

require 'db.php';

$idVendeur = $_GET['id'];

$stmt = $connexion->prepare('DELETE FROM Vendeurs WHERE idVendeur = :id');
    
    
    $stmt->bindParam(':id', $idVendeur);
    
    
    $stmt->execute();

    echo "le vendeur est supprimé";

    header("Refresh:5 ; url=displayVendeur.php");

?>