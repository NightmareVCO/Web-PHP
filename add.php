<?php
require "database.php";
// Variables super globales

// Contiene información de la petición http que han mandado.
// $_SERVER

if($_SERVER["REQUEST_METHOD"] == "POST"){
   if (empty($_POST["name"]) || empty($_POST["phone_number"])) {
      $error = "Please fill all the fields.";
   } else if (strlen($_POST["phone_number"]) < 9) {
      $error = "Phone number must be at least 9 characters.";
   } else {

      $name = $_POST["name"];
      $phoneNumber = $_POST["phone_number"];
      $name = $_POST["name"];
      $phoneNumber = $_POST["phone_number"];

      $statement = $conn->prepare("INSERT INTO contacts (name, phone_number) VALUES (:name, :phoneNumber)");
      $statement->bindParam(":name", $name);
      $statement->bindParam(":phoneNumber", $phoneNumber);
      $statement->execute();
   header("Location: index.php");
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
   >

   <!-- Bootstrap -->
   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.1/darkly/bootstrap.min.css"
      integrity="sha512-TW3EkvQFl2hehLxEL4TSEmP960SIWeTAdT6MWTdhbRdRyBRmQjEiWpoDW5VpgZQRy5RJE2qhugkeISF3BtDd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
   />
   <!-- Defer para que cargue después de cargar el html. -->
   <script
      defer
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
   ></script>
   <!-- Fin Bootstrap -->

   <!-- Static Content -->
   <link
      rel="stylesheet"
      href="./static/css/index.css"
   >

   <title>Contacts App</title>
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
         <a
            class="navbar-brand font-weight-bold"
            href="#"
         >
            <img
               class="mr-2"
               src="./static/img/logo.png"
               alt="logo"
            />
            ContactsApp
         </a>
         <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
         >
            <span class="navbar-toggler-icon"></span>
         </button>
         <div
            class="collapse navbar-collapse"
            id="navbarNav"
         >
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a
                     class="nav-link"
                     href="./index.php"
                  >Home</a>
               </li>
               <li class="nav-item">
                  <a
                     class="nav-link"
                     href="./add.php"
                  >Add Contact</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <main>
      <div class="container pt-5">
         <div class="row justify-content-center">
            <div class="col-md-8">
               <div class="card">
                  <div class="card-header">Add New Contact</div>
                  <div class="card-body">
                  <?php if ($error): ?>
                     <p class="text-danger">
                        <?= $error ?>
                     </p>
                  <?php endif ?>
                     <form method="post" action="add.php">
                        <div class="mb-3 row">
                           <label
                              for="name"
                              class="col-md-4 col-form-label text-md-end"
                           >Name</label>

                           <div class="col-md-6">
                              <input
                                 id="name"
                                 type="text"
                                 class="form-control"
                                 name="name"
                                 required
                                 autocomplete="name"
                                 autofocus
                              >
                           </div>
                        </div>

                        <div class="mb-3 row">
                           <label
                              for="phone_number"
                              class="col-md-4 col-form-label text-md-end"
                           >Phone Number</label>

                           <div class="col-md-6">
                              <input
                                 id="phone_number"
                                 type="tel"
                                 class="form-control"
                                 name="phone_number"
                                 required
                                 autocomplete="phone_number"
                                 autofocus
                              >
                           </div>
                        </div>

                        <div class="mb-3 row">
                           <div class="col-md-6 offset-md-4">
                              <button
                                 type="submit"
                                 class="btn btn-primary"
                              >Submit</button>
                           </div>
                        </div>
                     </form>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </main>
</body>

</html>