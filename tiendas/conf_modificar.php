<?php
session_start();
include_once'funciones.php';
?>

<html>
    <head><meta charset="utf-8">
		<link rel="stylesheet" href="ccs/decoracion.css" type="text/css">
        <style type="text/css">

        footer{margin-top: 560px}

        </style>
    </head>
    <body>
        <header>
        <h3>Has iniciado sesion como:<?php  echo $_SESSION['usuario'];?></h3>
        <ul>
            <li><a href="Consultar.php">Consulta</a></li>
            <li><a href="Alta_producto.php">Alta</a></li>
            <li><a href="Baja_producto.php">Baja Y Modificacion</a></li>
            <li><a href="menu2.php">Ir al Inicio</a></li>
        </ul>
        </header>
        <section>
            <article><?php  Modificar();?><br><a href="menu2.php" align="center">Volver al Inicio</a></article>
        </section>
        <footer>Diego Vera 2º Desarrollo aplicaciones WEB</footer>
    </body>
</html>