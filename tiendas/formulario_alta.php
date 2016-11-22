<?php
session_start();
$tipo_prov= isset($_POST['proveedor'])? $_POST['proveedor']:"";
include_once'funciones.php';
 ?>
<html>
    <head><meta charset="utf-8">
        <style type="text/css">
            body{width:800px;height:768px; }
            h3,footer{text-align:center}
            header{background-color:gainsboro;}
        header ul{width:500px;height:50px;background-color: greenyellow;
            margin-left: 120px;margin-top: 20px}
        header ul li{float:left; width:100px;height:20px;margin-left:20px;
                     list-style-type: none}   
        section{clear: both}
        section table{margin-top:20px}
        footer{background-color: greenyellow;margin-top: 473px;height: 30px;position: absolute;width:800px}
        a,footer{text-decoration:none;color:gray;}
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
            <table align="center">
                <form action="conf_alta.php" method="POST">
                    <tr>
                    <td>Codigo:</td>
                    <td><?php sacarcodigo()?></td>
                    </tr>
                    <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nombre"></td>
                    </tr>
                    <tr>
                    <td>Categoria:</td>
                    <td><input type="text" name="categoria"></td>
                    </tr>
                    <tr>
                    <td>Pecio:</td>
                    <td><input type="text" name="precio"></td>
                    </tr>
                    
                   <?php
                    if(isset($_POST['Alta'])){
                        
                        if($tipo_prov==""){
                            header("location: Alta_producto.php");
                        }else{
                            ?>
                            <tr><td>Proveedor:</td><td>
                                    <?php
                                if($tipo_prov==1){
                                        echo '<select name="prov">';
                                         sacarselect();
                                        echo"</select>";
                                        $tipo_prov=1;
                                }else{
                                        echo sacarproveedor().'</td></tr>';
                                        echo '<tr><td>Nombre del Proveedor: </td>';
                                        echo '<td><input type="text" name="nom_prov"></td></tr>';
                                        echo '<tr><td>Tipo de Proveedor:</td>
                                        <td><input type="text" name="tipo" value="2" readonly="readonly"></td></tr>';     
                                }
                            }
                    }
                 
                         echo   '<tr><td><input type="submit" value="Aceptar" name="Aceptar"></td></tr>';
                echo '</form>';
            echo '</table>';
        echo '</section>';
        ?>
        <footer>Diego Vera 2º Desarrollo aplicaciones WEB</footer>
    </body>
</html>
       


