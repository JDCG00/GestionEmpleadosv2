<?php
    switch ($_GET['op']) {
        case 'b':
            header("Location:baja2.php");
            break;
        case 'm':
            header("Location:modificar2.php");
            break;
        case 'a':
            header("Location:alta.php");
            break;
    }
?>