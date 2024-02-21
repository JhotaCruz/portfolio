<?php
if ($_POST){

  $nombre = $_POST["txtNombre"];
  $correo = $_POST["txtCorre"];
  $telefono = $_POST["txtTelefono"];
  $mensaje = $_POST["txtMensaje"];



// Varios destinatarios
$para = "jhon_tsca@hotmail.com"

// título
$titulo = "Recibiste un mensaje desde tu web";

// mensaje
$mensaje = "
Nombre: $nombre <br>
Correo: $correo  <br>
Telefono: $telefono <br>
Mensaje: $mensaje
";

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: jhon_tsca@hotmail.com' . "\r\n";
$cabeceras .= 'From: <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Enviarlo
// mail($para, $título, $mensaje, $cabeceras);
header("Location: confirmacion-envio.php");


}
?>

<?php
$pagina = "Confirmacion-envio";
?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/smile.png" type="image/x-icon">

</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php"; ?>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Gracias por contactarme</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te respondere en el menor tiempo posible</p>
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