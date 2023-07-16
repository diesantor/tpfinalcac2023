<?php
$miuser = "admin";
$miclave = "admin";

if($_POST['nombre'] == $miuser && $_POST['clave'] == $miclave){
    require_once("tickets_Select.php");}
    else{
        echo "<h2> Hubo un problema, por favor vuelva a intentarlo. </h2>";
    }



?>
