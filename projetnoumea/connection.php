<?php
include('connectdb.php'); 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['email']) && !empty($_POST["email"]) && isset($_POST['password']) && !empty($_POST["password"])) {
    $mail = $_POST["email"];
    $password = $_POST["password"];
    $username = "";
    try {
        $rqt= $db->prepare("SELECT * FROM connexion WHERE mail = '".$mail."' AND password = '".$password."'");
        $rqt->execute();
        $result = $rqt->fetchAll();
        $count = count($result);
        if($count!=0) {
            session_start();
            $_SESSION['data'] = $result;
            $_SESSION['id'] = $result["IDUSER"];
            $_SESSION['logged-in'] = true;
            header('Location:  profil.html');
        } else {
            $failed=true;
        }
    } catch(PDOException $e) {
        echo "Erreur" .$e->getMessage(). "</br>";
    }
}}
?>