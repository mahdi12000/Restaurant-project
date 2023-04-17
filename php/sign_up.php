<?php
require_once("connexion.php");
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['Adresse'];
$password=$_POST['Motdepasse'];
$query="INSERT INTO clients(email,password,nom,prenom) VALUES ('$email','$password','$lastname','$firstname')";
$var=$conn->query($query);
if ($var!=false) {
    echo "Insertion réussie<br>";
}
 else {
    echo "Erreur lors de l'insertion : " ;
}

?>
