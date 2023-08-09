<?php
$host = "localhost";
$database = "contacts_apps";
$user = "root";
$password = "";
try {
   $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
} catch (PDOException $e) {
   die("Connection failed: " . $e->getMessage());
}
?>