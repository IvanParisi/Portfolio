<?php
session_start();
if(empty($_POST["email"]) || empty($_POST["clave"])):
    header("Location:../index.php?page=6&error=datos");
    die();
endif;
$email = $_POST["email"];
$password = $_POST["clave"];
if(!is_dir("../usuarios/$email")):
    header("Location:../index.php?page=6&error=email_no_existe");
    die();
endif;
$passwordGuardado = file_get_contents("../usuarios/$email/password.txt");
if(!password_verify($password,$passwordGuardado)):
    header("Location:../index.php?page=6&error=password");
    die();
endif;
$_SESSION["usuario"] =
[
    "email" => $email,
    "usuario" => file_get_contents("../usuarios/$email/usuario.txt"),
    "rol" => file_get_contents("../usuarios/$email/rol.txt"),
];
$_SESSION["login"] = true;
if($_SESSION["usuario"]["rol"] == "admin"):
    header("Location:../panel/index.php"); 
    die();
endif;
header("Location:../index.php?page=1");