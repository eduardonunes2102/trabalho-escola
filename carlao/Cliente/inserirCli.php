<?php
    include_once("../conectar.php");
    //pega dados do form
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $endereco = $_POST['endereco'];
    $fone = $_POST['fone'];
    //não precisa testar o ISSET pois as inputs tem o required
    
    $sql = "insert into cliente(nome, sexo, fone, endereco) values 
    ('$nome', '$sexo', '$fone', '$endereco')";

    $resultado = mysqli_query($conexao, $sql);
    if($resultado){
        mysqli_close($conexao);
        header ("location/:listar.php");
        exit();
    }else{
        echo "Erro ao cadastrar o cliente".mysqli_error($conexao);

    }
    

?>