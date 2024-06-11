<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="d-flex justify-content-center">
            <a href="/" class="text-decoration-none text-dark ">
            <h2 class="text-danger display-5">CODE<img src="\assets\favicon.ico" alt="icon">IGNITER</h2></a>
        </nav>
    </header>

    <?= $this->renderSection('content') ;?>


    <footer class="container-fluid mt-auto fixed-bottom pt-2">
        <p class="text-center text-dark">Copyright &#169; 2024</p>
    </footer>

    <script src="/assets/js/bootstrap.bundle.js"></script>
</body>
</html>