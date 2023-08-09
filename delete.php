<?php

require "database.php";

session_start();

if (!isset($_SESSION["user"])) {
   header("Location: login.php");
   return;
 }

$id = $_GET["idcontacto"];

$statement = $conn->prepare("SELECT * FROM contacts WHERE idcontacto = :id");
$statement->execute([":id" => $id]);

if ($statement->rowCount() == 0) {
   http_response_code(404);
   echo("HTTP 404 NOT FOUND");
   return;
}

$conn->prepare("DELETE FROM contacts WHERE idcontacto = :id")->execute([":id" => $id]);

header("Location: home.php");
?>