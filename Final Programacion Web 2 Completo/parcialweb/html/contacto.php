
<!doctype html>
<html lang="es">

  <body>


    <div class="container margen">

          <h1 class="text-center texrojo "><strong>Contáctenos</strong></h1><br />
          
          <div class="row">
            <div class="col-md-7">
              <?php
            if(!empty($_GET["error"]) && $_GET["error"] == "si"):
          ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
                <strong>Error!</strong> Los campos <b>Nombre, Apellido, Email y Texto</b> son obligatorios
              </div>
          <?php
            endif;

          ?>
            <?php
            if(!empty($_GET["malo"]) && $_GET["malo"] == "si"):
          ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
                <strong>Error!</strong><b> Debe tener al menos un animal preferido :C</b> 
              </div>
          <?php
            endif;

          ?>
         <div class="alert alert-info" role="alert">
             <h4 class="alert-heading"></h4>
             <strong>Atento!</strong> <p> Todos los campos son obligatorios!!</p>
             <p class="mb-0"></p>
           </div>
                <form action="html/procesardatos.php" method="post">
                  
                  <input type="text" class="form-control" name="nombre" placeholder="Nombre..." /><br />
                  <input type="text" class="form-control" name="apellido" placeholder="Apellido..." /><br />
                  <input type="text" class="form-control" name="email" placeholder="E-mail..." /><br />
                  <textarea type="text" class="form-control" name="texto" placeholder="En que lo podemos ayudar?" style="height:150px;"></textarea><br />
                  <label for=""><strong>Animal preferido</strong> </label>
                  <div class="form-check">
                    <label class="form-check-label">
                    
                      <input type="checkbox" class="form-check-input" name="preferidos[]" id="" value="Perro" checked>
                     Perro
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                
                      <input type="checkbox" class="form-check-input" name=" preferidos[] " id="" value="Gato">
                      Gato
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name=" preferidos[] " id="" value="Tortuga">
                      Tortuga
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name=" preferidos[] " id="" value="Conejo">
                      Conejo
                    </label>
                  </div>
                  <input class="btn btn-primary mb-2" type="submit" value="Enviar" /><br /><br />

  
                  
                </form>
            </div>
            <div class="col-md-4 col-lg-5">
              <b>Contacto directo:</b> <br />
              Celular: 1568489542<br />
              E-mail: <a href="mailto:ivan.parisi@davinci.edu.ar">ivan.parisi@davinci.edu.ar</a><br />
              <br /><br />
              <b>Direccion</b><br />
              Dame la pata S.R.L<br />
              Av. San Juan 2861<br />
            </div>
          </div>
        </div>
        
          
   
  </body>
</html>