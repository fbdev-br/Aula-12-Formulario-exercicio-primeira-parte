<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = $_POST["nome"];
        $modelo = $_POST["modelo"];
        $senha = $_POST["senha"];

        echo "<h1>Resultado dos Dados Cadastrados.<h2>";
        echo "<h2>Nome Completo: $nome.</h2>";
        echo "<h2>Modelo de carro Elétrico Favorito: $modelo.</h2>";
        echo "<h2>Senha cadastrada: $senha.</h2>";
    ?>
    <a href="../resposta.html">Voltar</a>
</body>
</html>