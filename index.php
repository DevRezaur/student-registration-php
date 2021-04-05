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
          <a class="navbar-brand" href="./index.html">PHP App</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php">Landing Page</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Student Registration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Teacher Module</a>
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
            <h1 class="text-center">JavaScript App</h1>
            <p class="mt-3 mb-5 text-center">Welcome to my assignment-2 on JavaScript. This application contains 3 main feature. 
                First, it generates random fortune text on every refresh. Secondly, it has a currency 
                converter. And lastly, it has a online quiz feature with score.
            </p>
            <a href="./convert.html" class="text-center">
              <button type="button" class="btn btn-outline-light mb-4">Currency Converter</button>
            </a>
            <a href="#" class="text-center">
              <button type="button" class="btn btn-outline-light">MCQ Quiz</button>
            </a>
        </div>
    </section>
    <!-- Main Container End -->

     <!-- Footer Start -->
     <footer class="bg-dark">
        <p class="text-light text-center pt-4">&copy;Sanzida Sultana</p>
    </footer>
    <!-- Footer End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>