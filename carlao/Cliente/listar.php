<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1>Listar Cliente</h1>
        <hr>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sexo</th>
                    <th>Telefone</th>
                    <th>Endereço</th>     
                    <th>Operações</th>       
                </tr>
            </thead>
        <tbody>
        <?php
        include_once("../conectar.php");
        $sql = "select * from cliente"; 
        $resultado = mysqli_query($conexao, $sql);
        if($resultado){
            //enquanto houver valores na matriz resultado, associa ao vetor linha
            while($linha = mysqli_fetch_assoc($resultado)){
                echo "<tr>";
                echo "<td>".$linha['nome']."</td>";
                echo "<td>".$linha['sexo']."</td>";
                echo "<td>".$linha['fone']."</td>";
                echo "<td>".$linha['endereco']."</td>";
                echo "<td>";
                echo "<a href='#' class='btn btn-warning'>Editar</a>";
                echo " <a href='#' class='btn btn-danger'>Apagar</a>";
                echo "</td>";
                echo "</tr>";

            }
            echo "<tbody> </table>";
            mysqli_close($conexao);

        }else{
            echo "Erro no select do Cliente". mysqli_error($conexao);
        }


        ?>
        </div>
    
</body>
</html>