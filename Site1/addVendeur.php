<?php
require 'db.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$pwd = $_POST['pwd'];

    try {
        
        $sql = "INSERT INTO Vendeurs (nom, prenom, mail, tel, pwd) VALUES (:nom, :prenom, :mail, :tel, :pwd)";
        $stmt = $connexion->prepare($sql);

        
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':tel', $tel);
        $stmt->bindParam(':pwd', $pwd);

        
        $stmt->execute();

        
        echo "Les données ont été insérées avec succès dans la table Vendeurs.";
    } catch (PDOException $e) {
        
        die("Erreur : " . $e->getMessage());
    }






?>