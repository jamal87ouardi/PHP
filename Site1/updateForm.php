<?php

require 'db.php';

$idVendeur = $_GET['idVendeur'];


$sql = "SELECT * FROM Vendeurs WHERE idVendeur = :idVendeur";
$stmt = $connexion->prepare($sql);
$stmt->bindParam(':idVendeur', $idVendeur);
$stmt->execute();
$vendeur = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<form method="post" action="updateVendeur.php">

        <input type="hidden" name="idVendeur" value="<?= $vendeur['idVendeur']; ?>">
        <table>
            <tr>
                <td><label for="mail">Email:</label></td>
                <td><input type="email" id="mail" name="mail" value="<?= $vendeur['mail']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="nom">Nom:</label></td>
                <td><input type="text" id="nom" name="nom" value="<?= $vendeur['nom']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="prenom">Prénom:</label></td>
                <td><input type="text" id="prenom" name="prenom" value="<?= $vendeur['prenom']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="tel">Téléphone:</label></td>
                <td><input type="text" id="tel" name="tel" value="<?= $vendeur['tel']; ?>"></td>
            </tr>
            <tr>
                <td><label for="pwd">Mot de passe:</label></td>
                <td><input type="text" id="pwd" name="pwd" value="<?= $vendeur['pwd']; ?>" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" value="Mettre à jour"></td>
            </tr>
        </table>
</form>
