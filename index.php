<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição</title>
</head>
<body>
    <p>Formulário de Inscrição</p>
    <form action="script.php" method="post">
        <p>
        <label for="nome">Nome:</label>
            <input type="text" name="nome">
        </p>
        <p>
            <label  for="idade">Idade:</label>
            <input type="number" name="idade">
        </p>
        <input type="submit" value="Enviar formulário">
    </form>

</body>
</html>