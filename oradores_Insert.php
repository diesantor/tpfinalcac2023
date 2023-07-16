<?php 

    var_dump($_POST);
    /*
    ESTE ARCHIVO HACE EL INSERT DE LA COMPRA DE TICKETS.
    */
    
    /*
    DATOS DE CONEXION A LA BASE DE DATOS.
    =====================================
    */
    $mi_host= "localhost";
    $mi_user= "root";
    $mi_password= "1234";
    $mi_database= "tp_final_cac2023";
    $mi_conexion = mysqli_connect($mi_host, $mi_user, $mi_password, $mi_database);
    
    /*
    if (mysqli_connect_errno()) {
        echo "<hr>";
        echo "Hubo un error con la conexión a la BD.<br/>";
        }else{
            echo "<hr>";
            echo "Conexion Exitosa con la Base de Datos.<br/>";
            echo "<hr>";
        }
    
    */

    //Datos recibidos
    $name = $_POST['nombre'];
    $lastname = $_POST['apellido'];
    $email = $_POST ['correo'];
    $topic = $_POST ['tema'];
    
    
    //Datos para pruebas
    //$mi_name="Diego";
    //$lastname="Sanchez";
    //$email="diesantor@gmail.com";
    //$quantity="2";
    //$category="3";
    //$total= 26;

    //Inserta de datos a la base.
   $insert_datos = "INSERT INTO registro_oradores(nombre, apellido, correo,tema) VALUES 
   ('$name','$lastname','$email','$topic')";             
    
   $insertar_DB = mysqli_query($mi_conexion,$insert_datos);
    
   
    if($insertar_DB){ 
        header ('refresh: 1, url=ticketsMsj_Success.php');
    }else{
        header ('refresh: 1, url=ticketsMsj_Fail.php');
        
    }

 
?>