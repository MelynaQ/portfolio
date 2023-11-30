<?php
include('connectdb.php');
$nom = $_POST['nom'];
$tel=$_POST['tel'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];

// Préparer et exécuter la requête d'insertion
$rqt = $db->prepare("INSERT INTO connexion VALUES (NULL, $nom, $tel, $email, $mdp)");
$rqt->execute();

// Vérifier si l'insertion a réussi dans la bdd
if ($rqt->rowCount() > 0) {
    echo "Données insérées avec succès.";
} else {
    echo "Erreur lors de l'insertion des données.";
}
?>