
<?php
include_once("../funcion.php");

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $contenido = $_POST["texto"];

    if(isset($_POST['preferidos']) && in_array('Perro', $_POST['preferidos'])){
      $animal = "Perro";
    }
    if(isset($_POST['preferidos']) && in_array('Gato', $_POST['preferidos'])){
      $animal1 = "Gato";
    }
    if(isset($_POST['preferidos']) && in_array('Tortuga', $_POST['preferidos'])){
      $animal2 = "Tortuga";
    }
    if(isset($_POST['preferidos']) && in_array('Conejo', $_POST['preferidos'])){
      $animal3 = "Conejo";
    }
  
    
    if (verificar($nombre,$apellido,$email,$contenido)==true)
    {
      header("Location:../index.php?error=si&page=3");
      die();
    }else if(verificarcheckbox($animal,$animal1,$animal2,$animal3)==true)
    {
      header("Location:../index.php?malo=si&page=3");
      die();
    }else 
    {
      header("Location:enviado.php?nombre=$nombre&apellido=$apellido&email=$email&mensaje=$contenido&animal=$animal&animal1=$animal1&animal2=$animal2&animal3=$animal3");
      die();
    }


    

?> 