<?php include("include/header.php"); ?>
    
    <div class="container">
        <div class="row mt-5">
            <div class="col-2"></div>
            
            <div class="col-8">

                <h1>LOGIN</h1>

                <form class="row g-3" action="login_Select.php" method="post">
                    <div class="col-auto">
                        <label for="nombre" class="visually-hidden">Email</label>
                        <input type="text"  class="form-control" id="nombre" name="nombre" placeholder="Usuario">
                    </div>

                    <div class="col-auto">
                        <label for="clave" class="visually-hidden">Password</label>
                        <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña">
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Identificarse</button>
                    </div>
                </form>
            </div>

              
            </div>
            <div class="col-2"></div>
        </div>

    </div>
    
    <?php include("include/footer.php"); ?>