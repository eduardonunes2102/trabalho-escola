<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserir Cliente</title>
</head>
<body>
    <h1>Dados do cliente</h1>
    <form action="inserir.php" method="post">
    <label for="nome">nome</label>
    <input type="text" name="nome" id="nome" required ><br><br>
    <label for="sexo">Sexo</label>
    <select name="sexo" id="sexo">
        <option value="Feminino">Feminino</option>
        <option value="Masculino">Masculino</option>
    </select><br><br>
    <label for="telefone">telefone</label>
    <input type="text" name="telefone" id="telefone"><br><br>
    <label for="endereco">endereço</label>
    <input type="text" name="endereco" id="endereco"><br><br>

    <input type="submit" value="Cadastrar">
    <input type="reset" value="Limpar">



    </form>
</body>
</html>