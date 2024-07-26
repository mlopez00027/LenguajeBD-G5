<?php

    function RegistrarUsuario($conn, $nombre, $email, $password) {
        $sql = "INSERT INTO usuarios (nombre, email, password) VALUES (:nombre, :email, :password)";
        
        $stid = oci_parse($conn, $sql);
        
        oci_bind_by_name($stid, ':nombre', $nombre);
        oci_bind_by_name($stid, ':email', $email);
        oci_bind_by_name($stid, ':password', $password);
        
        $r = oci_execute($stid);
        
        if (!$r) {
            $e = oci_error($stid);
            echo "Error al ejecutar la consulta: " . $e['message'];
            return false;
        }
        
        oci_free_statement($stid);
        return true;
    
    }


    







?>