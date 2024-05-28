<?php

require 'db.php';

$idVendeur = intval($_POST['idVendeur']);
$mail = $_POST['mail'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$tel = $_POST['tel'];
$pwd = $_POST['pwd']; 


$sql = "UPDATE Vendeurs SET mail = :mail, nom = :nom, prenom = :prenom, tel = :tel, pwd = :pwd WHERE idVendeur = :idVendeur";
$stmt = $connexion->prepare($sql);
$stmt->bindParam(':mail', $mail);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':prenom', $prenom);
$stmt->bindParam(':tel', $tel);
$stmt->bindParam(':pwd', $pwd);
$stmt->bindParam(':idVendeur', $idVendeur);

if ($stmt->execute()) {
    echo "Données mises à jour avec succès.";
    header("Refresh:5 ; url=displayVendeur.php");

} else {
    echo "Erreur lors de la mise à jour : " . $stmt->errorInfo()[2];
    header("Refresh:5 ; url=displayVendeur.php");
}


?>