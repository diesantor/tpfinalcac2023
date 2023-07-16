<?php 

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
    
 

    //Datos recibidos
    $name = $_POST['my_name'];
    $lastname = $_POST['my_lastname'];
    $email = $_POST ['my_email'];
    $quantity = $_POST ['my_quantity'];
    $category = $_POST ['my_category'];
    $total = $_POST ['resultado'];
    
    //Datos para pruebas
    //$mi_name="Diego";
    //$lastname="Sanchez";
    //$email="diesantor@gmail.com";
    //$quantity="2";
    //$category="3";
    //$total= 26;

    //Inserta de datos a la base.
   $insert_datos = "INSERT INTO registro_usuarios(names,lastname,email,quantity,category,total) VALUES 
   ('$name','$lastname','$email','$quantity','$category','$total')";             
    
   $insertar_DB = mysqli_query($mi_conexion,$insert_datos);
    
   
    if($insertar_DB){ 
        header ('refresh: 1, url=ticketsMsj_Success.php');
    }else{
        header ('refresh: 1, url=ticketsMsj_Fail.php');
        
    }

 
?>