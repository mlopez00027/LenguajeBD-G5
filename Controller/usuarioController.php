<?php
include_once '../Model/usuarioModel.php';

if(isset($_POST["btnRegistrarme"]))
{
    RegistrarUsuario($conn, $nombre, $email, $password);
    header("location: ../View/login.php");
}
