<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olho na Ilha</title>

    <!-- css do bs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- js do bs -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/olhonailha/css/style.css">
</head>

<body>


    <header class="d-flex flex-column justify-content-between">

        <div class="d-flex justify-content-between align-items-center p-3">
            <div class="col-sm-4 col-lg-1 col-4">
                <a href="/olhonailha/index.php">
                    <img src="/olhonailha/imgs/ilha.jpeg" alt="olho" class="w-100">
                </a>
            </div>
            <div class="cad">
                <a href="/olhonailha/views/login.php" class="btn btn-primary">LOGIN</a>
                <a href="/olhonailha/controllers/logout_controller.php" class="btn btn-primary">LOGOUT</a>
            </div>
        </div>


        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav w-100 justify-content-evenly align-items-center">
                        <li class="nav-item btn btn-danger ">
                            <a class="nav-link text-white" aria-current="page" href="/olhonailha/views/denuncia.php">FAÇA UMA DENÚNCIA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/olhonailha/views/feed.php">FEED DE DENÚNCIAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/olhonailha/views/faqs.php">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/olhonailha/views/sobre.php">SOBRE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/olhonailha/views/perfil.php">PERFIL</a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>

    </header>


    <main>