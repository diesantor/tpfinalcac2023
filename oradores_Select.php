<?php include ("include/header.php"); ?>

<?php
$conexion = mysqli_connect("localhost","root","1234","tp_final_cac2023");


$query = "SELECT * from registro_oradores";
$result = mysqli_query($conexion,$query);
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-2"></div>
        <div class="col-8">
            <ul class="nav justify-content-center">
    
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="tickets_Select.php">Listado de tickets</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="oradores_Select.php">Listado de oradores</a>
                </li>
        
            </ul>

        </div>
        <div class="col-2"></div>
    </div>       
</div>

<div class="container">
    <div class="row">
        <div class="col-1"></div>

        <div class="col-10">
        <table class="table table-hover">
            
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Tema</th>                    
                </tr>
            </thead>
            
            <tbody>
            <?php
                    while($rows= mysqli_fetch_assoc($result))
                    {
                ?>
                <tr>
                    <td><?php echo $rows['nombre'];?></td>
                    <td><?php echo $rows['apellido'];?></td>
                    <td><?php echo $rows['correo'];?></td>
                    <td><?php echo $rows['tema'];?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>


        </div>
    
        <div class="col-1"></div>
    </div>

</div>

        

<?php include ("include/footer.php"); ?>