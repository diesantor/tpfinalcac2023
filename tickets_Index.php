<?php 
include "include/header.php";
?>

     <!-- Inicio de 3 Tarjetas -->
     <section>
        <div class="container mt-5 d-flex justify-content-around">

            <div class="row mt-3 mb-3 ">
                
                <div class="col-md-4">
                    <div class="card border-primary rounded-0">
                    
                    
                        <div class="card-body text-center">
                            <h4 class="card-title fw-bolder">Estudiante</h4>
                            <p class="card-text">Tienen un descuento</p>
                            <p class="card-text fw-bolder">80%</p>
                            <p class="card-text">*presentar documentación</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-primary  rounded-0" >
                        <div class="card-body text-center">
                            <h4 class="card-title fw-bolder">Trainee</h4>
                            <p class="card-text">Tienen un descuento</p>
                            <p class="card-text fw-bolder">50%</p>
                            <p class="card-text">*presentar documentación</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-warning  rounded-0">
                        <div class="card-body text-center">
                            <h4 class="card-title fw-bolder">Junior</h4>
                            <p class="card-text">Tienen un descuento</p>
                            <p class="card-text fw-bolder">15%</p>
                            <p class="card-text">*presentar documentación</p>
                        </div>
                    </div>
                </div>
            
              

            
            </div>
        </div>
    </section>
    <!-- Fin de 3 Tarjetas -->


    <!-- Inicio de  Formulario -->
    <form action="tickets_Insert.php" method="post">
        <div class="container">
        
            <div class="row mb-5">

                <div class="col">
                    <h5 class=" text-center">Venta</h5>
                    <h3 class=" text-center">VALOR DE TICKET $200</h3>
                </div>
            </div>

            
        
            <!--Ingresar Nombre-->
            <div class="row mb-3">

                <div class="col-2"></div>
                
                <div class="col-4">
                    <input type="text" name="my_name" id="nombre" class="form-control" placeholder="Ingresar Nombre." required>
                </div>
            
            <!--Ingresar Apellido-->
                <div class="col-4">
                    <input type="text" name="my_lastname" id="apellido" class="form-control" placeholder="Ingresar Apellido." required>
                </div>
            
                <div class="col-2"> </div></div>

            <!--Ingresar Correo electronico-->
            <div class="row mb-3">
                <div class="col-2"></div>
                
                <div class="col-8">
                    <input type="email" name="my_email" id="correo" class="form-control"  placeholder="Ingresar correo electrónico." required>
                </div>
                <div class="col-2"></div>
            </div>

        

            <!--Ingresar cantidad de tickets-->
            <div class="row mb-4 mt-4">
                <div class="col-2"></div>
                
                <div class="col-4">
                    <input  type="text" name="my_quantity" id="cantidad" class="form-control" placeholder="Ingresar cantidad de tickets." required>
                </div>


                <!--Seleccionar categoria-->  
                <div class="col-4">
                    <div class="input-group">
                        
                            
                            <select name="my_category" id="categorias"  class="form-control"required>
                                <option selected>Seleccionar categoria</option>
                                <option value="1">Estudiante</option>
                                <option value="2">Trainee</option>
                                <option value="3">Junior</option>
                            </select>
                        
                        
                    </div>
                </div>    
                <div class="col-2"></div>
            </div>


            <!-- Mostrar total -->
            <div class="row mb-4">
                <div class="col-2"></div>
                
                <div class="col-8">
                    <label for="resultado">Total a pagar $:</label>    
                    <input type="text" id="resultado" name="resultado"  class="form-control-plaintext bg-info" readonly>
                    
                </div>
                <div class="col-2"></div>
            </div>

     

            <!-- Botones Borrar, Resumen, Confirmar -->
            <div class="row">
                <div class="col-2"></div>
                
                <div class="col-4 justify-content-center d-flex">
                    <button type="button" class="btn btn-danger w-100" id="boton-borrar">Borrar</button>
                </div>

                <div class="col-4 justify-content-center d-flex">
                    <button type="button" class="btn btn-success w-100" id="boton-resumen">Resumen</button>
                </div>

                 <div class="col-2"></div>
            </div>
        
            <div class="row mt-3">
                <div class="col-2"></div>
                    <div class="col-8">
                        <button type="submit" class="btn btn-success w-100" id="boton-resumen">CONFIRME SU COMPRA</button>
                    </div>
                <div class="col-2"></div>
            </div>
        
        </div>
    </form>
<!-- Carga javascript local para calcular compra online -->
<script src="js/script.js"></script>
    


<?php include "include/footer.php"; ?>