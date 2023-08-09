<?php
// Lleva true para decirle que lo use como array asociativo.
require "database.php";

session_start();

if (!isset($_SESSION["user"])) {
  header("Location: login.php");
  return;
}
$contacts = $conn->query("SELECT * FROM contacts WHERE iduser = {$_SESSION['user']['iduser']}");
?>
   <?php require "partials/header.php"; ?>
      <div class="container pt-4 p-3">
         <div class="row">
            <!-- Contacts -->
            <?php if ($contacts->rowCount() == 0) : ?>
            <div class="col-md-4 mx-auto">
               <div class="card card-body text-center">
                     <h3 class="card-title text-capitalize">No Contacts</h3>
                     <a href="./add.php">Add Contact!</a>
               </div>
            </div>
            <?php endif ?>
            <?php foreach ($contacts as $contact) : ?>
            <div class="col-md-4 mb-3">
               <div class="card text-center">
                  <div class="card-body">
                     <h3 class="card-title text-capitalize"><?= $contact["name"] ?></h3>
                     <p class="m-2"><?= $contact["phone_number"] ?></p>
                     <a
                        href="edit.php?idcontacto=<?= $contact["idcontacto"] ?>"
                        class="btn btn-secondary mb-2"
                     >Edit Contact</a>
                     <a
                        href="delete.php?idcontacto=<?= $contact["idcontacto"] ?>"
                        class="btn btn-danger mb-2"
                     >Delete Contact</a>
                  </div>
               </div>
            </div>
            <?php endforeach ?>

         </div>
      </div>
<?php require "partials/footer.php"; ?>