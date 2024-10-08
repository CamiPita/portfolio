<?php 
$pg="proyectos"; ?>

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
    <title>Proyectos</title>
</head>

<body id="proyectos" class="d-flex flex-column h-100">
    <header class="container">
     <?php include_once "menu.php"; ?>

    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pb-5 pt-2">
                <h1>Proyectos</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12 pb-4">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>

        </div>

        <div class="row">

            <div class="col-12 col-sm-4">
                <div class="div-proyectos">
                    <img src="imagenes/abmclientes.png" alt="ABM " class="img-fluid">
                    <h3 class="ps-3">ABM clientes</h3>
                    <p class="parrafos-proyectos ps-3">Alta, baja y modificación de un registro de clientes. Realizado
                        en HTML, CSS, PHP, Bootstrap y
                        Json.
                    </p>
                    <div class="enlaces pt-5">
                        <a class="btn btn-rojo" href="">Ver online</a>
                        <a class="azul float-end pe-5" href="">Código fuente</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-4">
                <div class="div-proyectos">
                    <img src="imagenes/abmventas.png" alt="" class="img-fluid">
                    <h3 class="ps-3">Sistema de generación de ventas</h3>
                    <p class="parrafos-proyectos ps-3">Sistema de gestión de clientes, productos y ventas. Realizado en
                        HTML, CSS, PHP, MVC, Bootstrap,
                        Js,
                        Ajax, jQuery y MySQL de base de datos.</p>
                    <div class="enlaces pt-4">
                        <a class="btn btn-rojo" href="">Ver online</a>
                        <a class="azul float-end pe-5" href="">Código fuente</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="div-proyectos">
                    <img src="imagenes/proyecto-integrador.png" alt="" class="img-fluid">
                    <h3 class="ps-3 ">Proyecto integrador</h3>
                    <p class="parrafos-proyectos ps-3 pt-1">Proyecto Full Stack desarrollado en PHP, Laravel,
                        Javascript, jQuery, AJAX, HTML, CSS,
                        Mercadopago
                        con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
                    <div class="enlaces">
                        <a class="btn btn-rojo" href="">Ver online</a>
                        <a class="azul float-end pe-5" href="">Código fuente</a>
                    </div>
                </div>
            </div>
        </div>


    </main>

    <footer class="container mt-auto pb-4 ">
        <div class="btn-whatsapp">
            <a href="https://api.whatsapp.com/send?phone=541134256117" target="_blank" title="Whatsapp">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>
        <div class="row pt-5">
            <div class="col-7 col-sm-3">
                <a href="https://github.com/CamiPita" target="_blank" title="Github" class="redes"> <i
                        class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/?trk=guest_homepage-basic_nav-header-logo" target="_blank"
                    title="Linkedin" class="redes-link"> <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </div>
            <div class="col-12 col-sm-3 red">
                Sponsor <a href="https://depcsuite.com/?v=d72a48a8ebd2" target="_blank" class="red">DePC_ Suite</a>
            </div>
            <div class="col-12 col-sm-3">
                <a href="https://outlook.live.com/mail/0/" class="red">caamipita@hotmail.com</a>
            </div>


        </div>



    </footer>



</body>

</html>