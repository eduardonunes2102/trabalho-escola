<?php
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $banco="sistema";

    $conexao = mysqli_connect($servidor,$usuario,$senha,$banco) or die("erro ao conectar");
?>