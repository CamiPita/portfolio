<?php 
        $pg="contacto"; ?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Contacto</title>
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        
        <?php include_once "menu.php"; ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pb-5 pt-3">
                <h1>Contacto</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviandome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-12 col-sm-6">

                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre"
                            class="form-control  shadow ">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo"
                            class="form-control shadow ">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp"
                            class="form-control  shadow">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe tu mensaje aquí.."
                            class="form-control  shadow"></textarea>

                    </div>
                    <div class="pb-3 ">
                        <button type="submit" name="btnEnviar" id="btnEnviar" class="btn">ENVIAR</button>
                    </div>
                </form>

            </div>
        </div>




    </main>

    <footer class="container mt-auto pb-4">
        <div class="btn-whatsapp">
            <a href="https://api.whatsapp.com/send?phone=541134256117" target="_blank" title="Whatsapp">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>
        <div class="row">
            <div class="col-7 col-sm-3">
                <a href="https://github.com/CamiPita" target="_blank" title="Github"> <i
                        class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/?trk=guest_homepage-basic_nav-header-logo" target="_blank"
                    title="Linkedin"> <i class="fa-brands fa-linkedin"></i>
                </a>
            </div>
            <div class="col-12 col-sm-3">
                Sponsor <a href="https://depcsuite.com/?v=d72a48a8ebd2" target="_blank">DePC_ Suite</a>
            </div>
            <div class="col-12 col-sm-3">
                <a href="https://outlook.live.com/mail/0/">caamipita@hotmail.com</a>
            </div>


        </div>

    </footer>

</body>

</html>