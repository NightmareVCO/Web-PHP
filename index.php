<?php
$contacs = [
   [ "name" => "John", "phone" => "123456789" ],
   [ "name" => "Jane", "phone" => "987654321" ],
   [ "name" => "Bob", "phone" => "123456789"],
];
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
                     href="/contacts-app/"
                  >Home</a>
               </li>
               <li class="nav-item">
                  <a
                     class="nav-link"
                     href="./add.html"
                  >Add Contact</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <main>
      <div class="container pt-4 p-3">
         <div class="row">
            <!-- Contacts -->
            <?php foreach ($contacs as $contact) : ?>
            <div class="col-md-4 mb-3">
               <div class="card text-center">
                  <div class="card-body">
                     <h3 class="card-title text-capitalize"><?= $contact["name"] ?></h3>
                     <p class="m-2"><?= $contact["phone"] ?></p>
                     <a
                        href="#"
                        class="btn btn-secondary mb-2"
                     >Edit Contact</a>
                     <a
                        href="#"
                        class="btn btn-danger mb-2"
                     >Delete Contact</a>
                  </div>
               </div>
            </div>
            <?php endforeach ?>

         </div>
      </div>
   </main>
</body>

</html>