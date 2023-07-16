
<?php
include "include/header.php";
?>
    
     <header>
        <!-- INICIO IMAGEN AYSA -->
        <div class="container">
            
            <div class="row ">

                    <div class="col-md-12 ">
                        <div class="card text-bg-dark rounded-0">
                            <img src="img/ba1.jpg" class="img-fluid" style="filter: brightness(50%)" alt="imagen AYSA">
                            
                        
                        
            
                            <div class="card-img-overlay d-flex align-items-center justify-content-end text-end">
                                    
                                
                                    <div>

                                        <h5 class="card-title">BS AS</h5>
                                        <p >
                                            Bs As llega por primera vez a Argentina. Un evento para compartir con<br> nuestra comunidad el conocimiento y experiencia de los expertos que<br> estan creando el futuro de Internet. Ven a conocer a mienbros del<br> evento a otros estudientes de Codo a Codo y los creadores de primer <br> nivel que tnemos para ti. Te esperamos.
                                        </p>
                                        <a href="tickets_Index.php" class="btn btn-success">Comprar tickets</a>
                                        <a href="#oradores" class="btn btn-outline-light">Quiero ser orador</a>  
            
                                      
                                      
                                
                                    </div>
                                
                            
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- FIN IMAGEN AYSA -->



        <!-- INICIO ORADORES -->
        <div class="container mt-3">

            <div class="row">
                <div class="text-center">
                    <p>CONOCE A LOS</p>
                    <h3>ORADORES</h3>
                </div>

                
                <div class="col d-flex justify-content-center">
                    <div class="card " style="width: 18rem;">
                        <img src="img/oradores/steve.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text-start">
                                <span class="badge text-bg-warning">JavaScript</span>
                                <span class="badge text-bg-primary">React</span>
                            </h5> 
                            <h5 class="card-title">Steve Jobs</h5>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt ipsa doloremque aut illum tempora delectus quidem fuga officia accusamus nisi eius, iure nesciunt dolor est, sit voluptatem quaerat architecto. Quae?</p>
                        </div>
                    </div>

                </div>

                <div class="col d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="img/oradores/bill.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text-start">
                                <span class="badge text-bg-warning">JavaScript</span>
                                <span class="badge text-bg-primary">React</span>
                            </h5>   
                            <h5 class="card-title">Bill Gates</h5>
                              
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt ipsa doloremque aut illum tempora delectus quidem fuga officia accusamus nisi eius, iure nesciunt dolor est, sit voluptatem quaerat architecto. Quae?</p>
                        </div>
                    </div>

                </div>

                <div class="col d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="img/oradores/ada.jpeg" class="card-img-top " alt="...">
                        <div class="card-body">
                            <h5 class="text-start">
                                <span class="badge text-bg-secondary">Negocios</span>
                                <span class="badge text-bg-danger">Startups</span>
                            </h5>  
                            <h5 class="card-title">Ada Lovelace</h5>
                            
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt ipsa doloremque aut illum tempora delectus quidem fuga officia accusamus nisi eius, iure nesciunt dolor est, sit voluptatem quaerat architecto. Quae?</p>
                        </div>
                    </div>
                </div>
                


            </div>

        </div>
        <!-- FIN ORADORES -->


        <!-- IMAGEN HONOLULU -->
        <div class="container mt-3">

            <div class="row">

                <div class="col ">
                    <img class="img-fluid" src="img/honolulu.jpg" alt="imagen de playa">
                </div>
                
                <div class="col" style="background-color: #33454e;">
                    <div class="p-2 text-white">
                        <h5 > <strong>BS AS - Octubre</strong> </h5>
                        <p class="text-justify">
                            Buenos Aires es la provincia y localidad más grande del estado de Argentina, en los Estados Unidos, Honolulu es la más surea de entre las principales ciudades estadounidenses. Aunque el nombre de Honolulu se refiere al área urbana en la costa sureste de la isla de Oahu, la ciudad y el condado de Honolulu han formado una ciudad condado consolidad que cubre toda la ciudad(aproximadamente 600 km2 de superficie).
                        </p>
                        <a href="#" class="btn btn-outline-light">Conoce más</a> 
                    </div>                    
                </div>
            </div>

        </div>
        <!-- FIN IMAGEN HONOLULU -->

        <!-- FORMULARIO -->
        <form action="oradores_Insert.php" method="post">
            <div class="container mt-3">
           
                <div class="row ">

                    <div class="col text-center">
                        <h6>CONVIÉRTETE EN UN</h6>
                        <h2 id="oradores">ORADOR</h2>
                        <h6>Anótate como orador para dar una charla ignite. Cuentanos de que quieres hablar!</h6>
                    </div>
                </div>
                            
                <div class="row">

                    <div class="col-1"></div>

                    <div class="col-3">
                        <div>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                        </div>

                    </div>

                    <div class="col-3">
                        <div>
                            <input type="text" name="apellido"class="form-control" placeholder="Apellido"required>

                        </div>
                    
                    
                    </div>
                    <div class="col-3">
                        <div>
                            <input type="email" name="correo" class="form-control" placeholder="Correo"required>

                        </div>
                    </div>

                    <div class="col-1"></div>     
                        
                </div>

                
                        
                        
                
                <div class="row">

                    <!-- Uso 1 columna de margen -->
                    <div class="col-1"></div>

                    <!-- Uso 10 columnas de formulario -->
                    <div class="col-9 mt-3">
                        <div class="form-floating justify-content-center d-flex">
                                <textarea name="tema" class="form-control" placeholder="Deje acá" id="floatingTextarea" style="height:100px">  </textarea>
                                <!-- <label for="floatingTextarea">Sobre que quieres hablar?</label> -->
                        </div>
                        
                        <div class="d-grid gap-2 mt-3 ">
                            <button class="btn btn-success" type="submit">Enviar</button>
                        </div>
                    </div>
                    
                    <!-- Uso 1 columna de margen -->
                    <div class="col-1"></div>


                </div>
                
             
            </div>
        </form> 
     </header>
    <!-- FIN FORMULARIO -->
    

<?php
include "include/footer.php";
?>




