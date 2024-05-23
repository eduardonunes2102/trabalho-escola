<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "Sistema";

    $conecao = mysqli_connect($servidor, $usuario, $senha, $banco) or die("Erro ao conectar");
?>