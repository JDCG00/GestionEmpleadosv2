<?php
    function formulario1(){
        echo '
            <h3>¿Qué desea hacer: CONSULTAR datos / dar de ALTA / dar de BAJA datos / MODIFICAR datos ?</h3>
            <p><a href="php/consultar.php">1.- CONSULTAR DATOS</a></p>
            <p><a href="php/alta.php">2.- DAR DE ALTA DATOS</a></p>
            <p><a href="php/baja.php">3.- DAR DE BAJA DATOS</a></p>
            <p><a href="php/modificar.php">4.- MODIFICAR DATOS</a></p>
        ';
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión Empleados</title>
</head>
<body>
    <?php
        formulario1();
    ?>
</body>
</html>