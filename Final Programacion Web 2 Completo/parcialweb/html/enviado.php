
<!doctype html>
<html lang="es">
  <head>
    <title>Gracias</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
    <div class="alert alert-success" role="alert">
     
        <strong>Enviado</strong> Gracias <?= $_GET["nombre"]?> <?= $_GET["apellido"]?> En la brevedad te contestaremos. Su/s animal/es preferido/s son: <?=  $_GET["animal"]?> <?=  $_GET["animal1"]?> <?=  $_GET["animal2"]?> <?=  $_GET["animal3"]?>
      </div>
      <div class="container-fluid">
      <strong>Emisor</strong> <?=  $_GET["email"] ?>
      </div>
      <div class="jumbotron">
      
          <?=  $_GET["mensaje"] ?>
        
      </div>
      <div class="container">
        <div class="text-center">
          <a href="../index.php"><h1>Volver al inicio</h1></a>
        </div>
      </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>