<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/smile.png" type="image/x-icon">
</head>

<body id="inicio">
    <header class="container">
    <?php include_once "menu.php";?>
    </header>

    <body id="inicio" class="d-flex flex-column h-100">
    

    <main class="container">
        <div class="row">
            <div class="col-12 mt-2 text-center div-cohete">
                <a href="proyectos.php"><img src="images/cohete.svg"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-2 text-center mb-3 offset-sm-3">
                <p class="py-2">Bienvenid@ a mi sitio web sobre desarrollo en sistemas.</p>
            </div>
        </div>
            <div class="row">
            <div class="col-12 text-center col-sm-6 my-4 mt-sm-5 text-center mb-3 offset-sm-3">
                <a href="proyectos.php" class="btn btn-blanco shadow">Conoce mis proyectos</a>
            </div>
        </div>
    </main>

        <footer class="container mt-auto py-4">
            <div class="btn-whatsapp">
              <a href="https://api.whatsapp.com/send?phone=+573017795555" target="_blank">
              <i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i></a>
            </div>
            <div class="row">
              <div class="col-3">
                <a href="https://github.com" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
              </div>
              <div class="col-3">
                Sponsor <a href="https://depcsuite.com">DePc Suite</a>
              </div>
              <div class="col-3">
                <a href="mailto:jhon_tsc@hotmail.com">jhon_tsc@hotmail.com</a>
              </div>
            </div>
          </footer>

</body>

</html>