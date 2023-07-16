<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP FINAL.</title>

    <!-- Carga estilos con bootstrap por CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <!-- Carga estilos css personalizados -->
    <!-- <link rel="stylesheet" href="styles/style.css"> -->
</head>
<body>
    
    <!-- Inicio Navbar -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               

                <nav class="navbar navbar-expand-lg" style="background-color: #33454e;">
                    <div class="container-fluid">
            
                         
                        <a class="navbar-brand text-light" href="index.php">
                            <img width="90" src="img/logo.png" alt="mi_logo">
                            Conf Bs As
                        </a>
            
                         <!-- Inicio Boton hamburguesa responsive -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- Fin Boton hamburguesa resposive -->
                        
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            
                            <ul class="nav ">
                            
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#">La conferencia</a>
                                </li>
                            
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#">Los oradores</a>
                                </li>
                            
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#">El lugar y la fecha</a>
                                </li>
                            
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#"">Conviértete en orador</a>
                                </li>
            
                                <li class="nav-item">
                                    <a class="nav-link text-success" href="tickets_Index.php">Comprar tickets</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-warning" href="login_Index.php">LOGIN</a>
                                </li>
                            </ul>
            
                        </div>
                    </div>
                </nav>
    
            </div>
            
        </div>
        
    </div>
     <!-- Fin Navbar -->