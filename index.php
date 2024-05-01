<?php
$pg="inicio";
?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body id="inicio" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php";?>

    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 mx-auto text-center cohete pb-5 ">
              <a href="proyectos.php" ><img src="images/cohete.svg" alt=""></a>
            </div>
        </div>
        <div class="col-12 col-sm-6 offset-sm-3 text-center">
            <div class="my-4">
                <p class="px-5 py-2">Bienvenid@ a mi sitio web sobre desarrollo en sistemas. </p>
        </div>
        </div>
        <div class="col-12 text-center pt-3 pb-5 ">
            <a href="proyectos.html" class="btn shadow">Conoce mis proyectos</a>
        </div>
        </div>



    <footer class="container mt-auto pb-4">

        <div class="row">
            <div class="col-3 col-sm-3">

                <a href="https://Gethub.com" target="_blank" title="Gethub">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://Linkedin.com" target="_blank" title="Linkedin">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </div>

            <div class="col-3 col-sm-3">
                Sponsor <a href="https://depcsuite.com"> DePCSuite.com</a>
            </div>
            <div class="col-3 col-sm-3">
                <a href="mailto:caamipita@hotmail.com">caamipita@hotmail.com</a>
            </div>

        </div>
        <div class="whatsapp" pe-5>
            <a href="https://api.Whatsapp.com/send?phone=541134256117" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>
    </footer>




</body>

</html>