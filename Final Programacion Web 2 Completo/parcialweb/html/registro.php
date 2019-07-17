

<body>

   <div class="container margen text-center">
     <img src="img/cat.png" alt="Gato" class="rounded  img-fluid">
     <img src="img/dog.png" alt="Perro" class="rounded  img-fluid">
     <div class="row">
     <div class="col margen">
     <h1 class="text-center texrojo">Bienvenido!</h1>
     </div>
     
     </h1>
     </div>
   </div>
   <div class="row">

<div class="col-6 offset-3">
    <form action="html/procesar_registro.php" enctype="multipart/form-data" method="POST" class="bg-light p-3">
        <div class="form-group">
          <label>Usuario</label>
          <input type="text" name="usuario" class="form-control" placeholder="Ejemplo: ElGato123">
        </div>

       <div class="form-group">
    <label >Contraseña</label>
    <input type="password" class="form-control"  placeholder="Contraseña" name="clave">
  </div>

  <div class="form-group">
    <label >E-Mail</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="ivan.parisi@davinci.edu.ar">

  </div>
    
 
        
       
          
        <button type="submit" class="btn btn-primary mb-2">Registrarse</button>
    </form>
</div>
</div>
<div class="container mb-2">

            <?php
            if(!empty($_GET["error"])):
                $error = $_GET["error"];
                
                if($error == "datos"):
                    $mensaje = "Los campos email y password son obligatorios.";
                elseif($error == "email_existe"):
                    $mensaje = "Ya hay un usuario asociado al mail ingresado.";
                else:
                    $mensaje = "";
                endif;
                
            ?>

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Error: </strong> <?= $mensaje ?>.
                </div>

            <?php
            endif;

            ?>
 </div>



   

  </body>

