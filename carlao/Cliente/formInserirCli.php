<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserir Cliente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Dados do CLiente</h1>
    <form action="inserir.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br> <br>

        <label for="sexo">Sexo:</label>
        <select name="sexo" id="sexo" required>
            <option value="Feminino">Feminino</option>
            <option value="Masculino">Masculino</option>
        </select> <br> <br>

        <label for="fone">Telefone:</label>
        <input type="text" name="fone" id="fone" required> <br> <br>

        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco" required> <br> <br>


        <input type="submit" value="Cadastrar" class="btn btn-success">
        <input type="reset" value="Apagar" class="btn btn-danger">

    </form>



</body>
</html>