<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="/Assest/funciones/funcion.js"></script>
    <link href="/Assest/CSS/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="/Assest/CSS/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Assest/CSS/estilos.css">
    <title>Sistema de Biblioteca IUDigital</title>
</head>

<body>
    <!--Crear Menu-->
    <header>
        <nav class="menu">
            <div class="hamburger" onclick="mostrar()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <label class="logo"><img src="/Assest/imagenes/LOGO.png" alt="logo IUDIGITAL"></label>
            <ul id="sliding_menu">
                <li><span class="close" onclick="ocultar()">X</span> </span></li>
                <li><a href="/">Inicio</a></li>
                <li><a href="/Views/page/catalogos.php">Catalogos</a></li>
                <li><a href="/Views/page/colecciones.php">Colecciones</a></li>
                <li><a href="/Views/page/servicios.php">Servicios</a></li>
            </ul>
        </nav>
    </header>
    <div class="banner"> <!--este div se cierra en el footer php -->