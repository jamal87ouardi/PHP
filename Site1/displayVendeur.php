<?php

require 'db.php';

try {
    

    
    $stmt = $connexion->prepare("SELECT * FROM Vendeurs");
    $stmt->execute();

    
    $vendeurs = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    
    echo 'Erreur de connexion : ' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Vendeurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
</head>
<body>
    <h1>Liste des Vendeurs</h1>
    <table class="table table-striped">
        
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Téléphone</th>
                <th>Mot de passe</th>
            </tr>
        
        
            <?php if (!empty($vendeurs)): 
                 foreach ($vendeurs as $vendeur): ?>
                    <tr>
                        <td><?php echo $vendeur['idVendeur']; ?></td>
                        <td><?php echo $vendeur['mail']; ?></td>
                        <td><?php echo $vendeur['nom']; ?></td>
                        <td><?php echo $vendeur['prenom']; ?></td>
                        <td><?php echo $vendeur['tel']; ?></td>
                        <td><?php echo $vendeur['pwd']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">Aucun vendeur trouvé.</td>
                </tr>
            <?php endif; ?>
        
    </table>
</body>
</html>
