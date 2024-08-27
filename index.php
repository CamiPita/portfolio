<?php 
$pg="inicio"; ?>


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
    <title>Inicio</title>
</head>

<body id="inicio" class="d-flex flex-column h-100">
    <header class="container">
       <?php include_once "menu.php"; ?>

    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 cohete mx-auto text-center">
                <img src="imagenes/cohete.svg" alt="cohete" >
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center inicio pt-5">
                <p ><span class="my-5">Bienvenid@ a mi sitio web sobre mis proyectos.</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center pb-4 pt-3">
                <a href="proyectos.php" class="btn">Conoce mis proyectos</a>
            </div>
        </div>


    </main>

    <footer class="container mt-auto pb-4 ">
        <footer class="container mt-auto pb-3">
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