
  <body>

    
    <div class="container margen">

            <div class="row">
      
              
      
              <div class="col-lg-12">
              <div class="row">
                  <div class="col-lg-12 text-center texrojo" id="perros">
                   <h1><strong>Perros</strong><h1>
                  </div>
                 <!-- Seccion perros -->
                  <?php
                $carpeta = "productos/perro";
                $dir = opendir($carpeta);
                while ($productos = readdir($dir)):
                  if ($productos != "." && $productos != ".."):
                  $imagen = count(glob("$carpeta/$productos/$productos.*")) > 0 ? 
                  glob("$carpeta/$productos/$productos.*") [0] : "img/sin_imagen.jpg";
                ?>
                
                  <div class="col-lg-4 col-md-6 mb-4">
                 
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="<?= $imagen ;?>" alt="<?= $productos; ?>"></a>
                      <div class="card-body">
                        <h4 class="card-title">
                        <?php
                          $titulo = str_ireplace($numeros,"",$productos);
                        ?>
                          <a href="#"><strong><?= ucfirst($titulo) ?></strong></a>
                        </h4>
                        <h5>ARS $<?= imprimir("$carpeta/$productos/precio.txt","precio"); ?></h5>
                        <p class="card-text"><?= imprimir("$carpeta/$productos/descripcion.txt","descripcion"); ?></p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
                 </div>
                  <?php
                  endif;
                endwhile;
                      ?>
            <!-- Fin Seccion perros -->
                    <!-- Seccion Gatos -->
                    
                    <div class="col-lg-12 text-center texrojo" id="gatos">
                   <h1><strong>Gatos</strong><h1>
                  </div>
                    <?php
                $carpeta = "productos/gato";
                $dir = opendir($carpeta);
                while ($productos = readdir($dir)):
                  if ($productos != "." && $productos != ".."):
                  $imagen = count(glob("$carpeta/$productos/$productos.*")) > 0 ? 
                  glob("$carpeta/$productos/$productos.*") [0] : "img/sin_imagen.jpg";
                ?>
              
                  
                  <div class="col-lg-4 col-md-6 mb-4">
                 
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="<?= $imagen ;?>" alt="<?= $productos; ?>"></a>
                      <div class="card-body">
                        <h4 class="card-title">
                        <?php
                          $titulo = str_ireplace($numeros,"",$productos);
                        ?>
                          <a href="#"><strong><?= ucfirst($titulo) ?></strong></a>
                        </h4>
                        <h5>ARS $<?= imprimir("$carpeta/$productos/precio.txt","precio"); ?></h5>
                        <p class="card-text"><?= imprimir("$carpeta/$productos/descripcion.txt","descripcion"); ?></p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
                 </div>
                  <?php
                  endif;
                endwhile;
                      ?>
                 <!-- Fin Seccion gatos -->
  
                    <!-- Seccion Varios -->
                    
                    <div class="col-lg-12 text-center texrojo">
                   <h1><strong>Varios</strong><h1>
                  </div>
                    <?php
                $carpeta = "productos/varios";
                $dir = opendir($carpeta);
                while ($productos = readdir($dir)):
                  if ($productos != "." && $productos != ".."):
                  $imagen = count(glob("$carpeta/$productos/$productos.*")) > 0 ? 
                  glob("$carpeta/$productos/$productos.*") [0] : "img/sin_imagen.jpg";
                ?>
               
                  
                  <div class="col-lg-4 col-md-6 mb-4">
                 
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="<?= $imagen ;?>" alt="<?= $productos; ?>"></a>
                      <div class="card-body">
                        <h4 class="card-title">
                        <?php
                          $titulo = str_ireplace($numeros,"",$productos);
                        ?>
                          <a href="#"><strong><?= ucfirst($titulo) ?></strong></a>
                        </h4>
                        <h5>ARS $<?= imprimir("$carpeta/$productos/precio.txt","precio"); ?></h5>
                        <p class="card-text"><?= imprimir("$carpeta/$productos/descripcion.txt","descripcion"); ?></p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
                 </div>
                  <?php
                  endif;
                endwhile;
                      ?>
                 <!-- Fin Seccion varios -->
      
                </div>
                <!-- /.row -->
      
              </div>
              <!-- /.col-lg-9 -->
      
            </div>
            <!-- /.row -->
      
          </div>
          <!-- /.container -->

          
    
  
  

  </body>

