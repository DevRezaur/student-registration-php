<?php
  include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/index.css" rel="stylesheet">
    <title>Landing Page</title>
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.php">PHP App</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php">Landing Page</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./registration.php">Student Registration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./teacher-module.php">Teacher's Module</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <!-- Navbar End -->
    
    <!-- Main Container Start -->
    <section class="main-section container px-3 py-5">
        <div class="card bg-dark text-light mx-auto">
            <img src="image/co_worker.svg" alt="image">
            <h1 class="text-center">Student Registration App</h1>
            <p class="mt-3 mb-5 text-center">Welcome to my web assignment-3 on PHP. This is a mini student registration 
              system. Where students will register for 4 different slots according to availability. And the teacher can 
              track their registration process via teacher's module.
            </p>
            <a href="./registration.php" class="text-center">
              <button type="button" class="btn btn-outline-light mb-4">Student Registration</button>
            </a>
            <a href="./teacher-module.php" class="text-center">
              <button type="button" class="btn btn-outline-light">Teacher's Module</button>
            </a>
        </div>
    </section>
    <!-- Main Container End -->

     <!-- Footer Start -->
     <footer class="bg-dark">
        <p class="text-light text-center pt-4">&copy;Rezaur Rahman</p>
    </footer>
    <!-- Footer End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>