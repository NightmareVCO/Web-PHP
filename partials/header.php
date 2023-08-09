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
   <link rel="stylesheet" href="./static/css/index.css" />
   <?php $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) ?>
   <?php if ($uri == "/contacts-app/" || $uri == "/contacts-app/index.php"): ?>
      <script defer src="./static/js/welcome.js"></script>
   <?php endif ?>

   <title>Contacts App</title>
</head>

<body>
<?php require "navbar.php"; ?>
   <main>

   <!-- Content here -->