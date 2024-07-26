<?php
include_once '../Model/usuarioModel.php';

if (isset($_POST["btnRegistrarme"])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (RegistrarUsuario($conn, $nombre, $email, $password)) {
        header("Location: ../View/login.php");
        exit();
    } else {
        echo "Error al registrar el usuario.";
    }
}

