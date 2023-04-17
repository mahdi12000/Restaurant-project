<?php
$host = "localhost";
$dbname = "restaurant";
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connexion succesfulley message de connexuion.php<br>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
