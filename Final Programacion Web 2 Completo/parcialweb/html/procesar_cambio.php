<?php
session_start();

if(empty($_POST["claveold"]) || empty($_POST["newclave"]) || empty($_POST["newclavec"])):
    header("Location:../index.php?page=7&error=datos");
    die();
endif;
$email = $_SESSION["usuario"]["email"];
$password = $_POST["claveold"];
$passwordnueva = $_POST["newclave"];
$passwordnuevac = $_POST["newclavec"];
$passwordGuardado = file_get_contents("../usuarios/$email/password.txt");
if(!password_verify($password,$passwordGuardado)):
    header("Location:../index.php?page=7&error=password");
    die();
endif;
if($password==$passwordnueva):
    header("Location:../index.php?page=7&error=misma");
    die();
endif;
if($passwordnueva!=$passwordnuevac):
    header("Location:../index.php?page=7&error=passwordnueva");
    die();
endif;
$carpeta = opendir("../usuarios/$email");
while($file = readdir($carpeta)){
    if($file != "." && $file != "..")
    {
    unlink("../usuario/$email/password.txt");    
    }
}
$passwordnueva = password_hash($passwordnueva,PASSWORD_DEFAULT);
file_put_contents("../usuarios/$email/password.txt",$passwordnueva);
header("Location:../index.php?page=1&si=ok");