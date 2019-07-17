
<!DOCTYPE html>
<html lang="es">

  <head>
    <link rel="stylesheet" href="css/cards-gallery.css">
  </head>
  
  
  <body>
  <?php
            if(!empty($_GET["ok"])):
                $ok = $_GET["oks"]; 
                if($ok == "ok"):
                    $mensaje = "Se subio la imagen correctamente";
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
  <div class="container margen">

   <div class="text-center">
   <h1 class="texrojo big display-3" >Galeria</h1>
    <p class="margen"> 
    🐱Este es un lugar, donde la gente puede subir la imagen de su mascota 
    y compartirla con los demás!.🐶 </p>
    <p class="center-block btn btn-outline-primary "><a href="index.php?page=8">Subi la tuya!</a></p>
    <br>  
    <small id="help_descripcion" class="text-muted">Es necesario estar registrado.</small>
   </div>
    
  </div>

  <section class="gallery-block cards-gallery">
	    <div class="container">
	        
	        <div class="row" aling="center">
            <?php
                $carpeta = "galeria";
                $dir = opendir($carpeta);
                while ($fotos = readdir($dir)):
                  if ($fotos != "." && $fotos != ".."):
                  $imagen = count(glob("$carpeta/$fotos/$fotos.*")) > 0 ? 
                  glob("$carpeta/$fotos/$fotos.*") [0] : "img/sin_imagen.jpg";
               
                ?>
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                
	                		<img src="<?= $imagen; ?>" alt="Card Image" class="card-img-top">
	                	</a>
	                    <div class="card-body">
	                        <h6><?= ucfirst($fotos) ?></h6>
	                        <p class="text-muted card-text"><?= imprimir("$carpeta/$fotos/descripcion.txt","descripcion") ?></p>
                        </div>
                        <small id="help_descripcion" class="text-muted">Subida por el usuario: <?= imprimir("$carpeta/$fotos/usuario.txt","usuario");?></small>
                    </div>
                    
	            </div>
              <?php
              endif;
            endwhile;
              ?>
	            </div>
	        </div>
	    
	</section>


  

  </body>

</html>