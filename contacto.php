<?php

if ($_POST){

  $nombre = $_POST["txtNombre"];
  $correo = $_POST["txtCorreo"];
  $telefono = $_POST["txtTelefono"];
  $mensaje = $_POST["txtMensaje"];
  
  if($nombre != "" && $correo != "" && $telefono != "" && $mensaje != "") 
  {
$para  = 'jhon_tsc@hotmail.com' . ', '; 
$título = 'Recibiste un mensaje desde tu web';

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
$cabeceras .= 'To: jhota <Jhota@example.com>' . "\r\n";
$cabeceras .= 'From: jhon <jhon@example.com>' . "\r\n";

// Enviarlo
//mail($para, $título, $mensaje, $cabeceras);
header("Location: confirmacion-envio.php");

}
}
?>

<?php
$pagina = "contacto";
?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
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
            <div class="col-12 py-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="email" id="txtCorreo" name="txtCorreo" placeholder="Correo" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="tel" id="txtTelefono" name="txtTelefono" placeholder="Teléfono/Whatsapp"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" class="form-control shadow" placeholder="Escribe aquí tu mensaje"></textarea>
                    </div>
                    <div class="pb-3">
                        <button class="btn btn-blanco px-3">ENVIAR</button>
                    </div>
                </form>
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