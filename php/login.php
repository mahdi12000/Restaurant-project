<?php
require_once('connexion.php');
if (require_once('connexion.php')) {
    echo "true<br>";
} else {
    echo "false<br>";
}
$Email = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT email,password FROM clients  where email='$Email'AND password='$password'";
$var = $conn->query($query);
$queryname = "SELECT nom FROM clients WHERE email='$Email'";
$name = $conn->query($queryname);
if ($var->rowCount() > 0) {
    $nom = $name->fetch(PDO::FETCH_COLUMN);
    echo "hello " . $nom . "<br>";
} else {
    echo "invalid email or password<br>";
}
