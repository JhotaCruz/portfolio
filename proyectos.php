<?php
$pagina = "proyectos";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyectos</title>
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="shortcut icon" href="images/smile.png" type="image/x-icon">

</head>

<body id="proyectos">
    <header class="container">
    <?php include_once "menu.php";?>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row">
            <div class="col- 12 col-sm-4 p-3">
                <div class="row border">
                    <div class="col-12 px-3 py-2">
                        <img src="images/abmclientes.png" alt="ABM CLIENTES" class="img-fluid">
                        <h2 class="col-12 px-3 py-2">ABM Clientes</h2>
                        <p class="col-12 px-3 py-1">Alta, baja y modificación de un registro de clientes. Realizado en
                            HTML,
                            CSS,
                            PHP, Bootstrap y Json.</p>
                        <div class="row py-4 pb-3 px-3">
                            <div class="col-6">
                                <a href="#" class="btn btn-rojo">Ver online</a>
                            </div>
                            <div class="col-6 text-center">
                                <a href="#" class="link-rojo">Código fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col- 12 col-sm-4 p-3">
                <div class="row border">
                    <div class="col-12  px-3 py-2">
                        <img src="images/abmventas.png" alt="Gestion de ventas" class="img-fluid">
                        <h2 class="col- 12 px-3 py-2">GESTIÓN DE VENTAS</h2>
                        <p class="col-12 px-3 py-1">Sistema de gestión de clientes, productos y ventas. Realizado en
                            HTML, CSS,
                            PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                        <div class="row py-4 pb-3 px-3">
                            <div class="col-6">
                                <a href="#" class="btn btn-rojo">Ver online</a>
                            </div>
                            <div class="col-6 text-center">
                                <a href="#" class="link-rojo">Código fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col- 12 col-sm-4 p-3">
                <div class="row border">
                    <div class="col-12  px-3 py-2">
                        <img src="images/proyecto-integrador.png" alt="PROYECTO INTEGRADOR" class="img-fluid">
                        <h2 class="col-12 px-3 py-2">PROYECTO INTEGRADOR</h2>
                        <p class="col-12 px-3 py-1">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript,
                            jQuery, AJAX,
                            HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                            funcionalidades a fines..</p>
                        <div class="row py-4 pb-3 px-3">
                            <div class="col-6">
                                <a href="#" class="btn btn-rojo">Ver online</a>
                            </div>
                            <div class="col-6 text-center">
                                <a href="#" class="link-rojo">Código fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <footer class="container mt-auto py-4">
        <div class="btn-whatsapp">
            <a href="https://api.whatsapp.com/send?phone=573017795555" target="_blank">
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