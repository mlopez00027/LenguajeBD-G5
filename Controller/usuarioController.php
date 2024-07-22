<?php include_once '../Model/usuarioModel.php';

    if(isset($_POST["btnRegistrarme"]))
    {
        RegistrarUsuario();
        header("location: ../View/login.php");
    }

?>