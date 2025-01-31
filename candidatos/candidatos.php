<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de cadastro</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <h2>Cadrasto de Canditados</h2>
    <form action="cad_canditados.php" method="post">

    <label for="nome">nome: </label>
    <input type="text" id="nome" name="nome" required>

    <label for="cpf">cpf:</label>
    <input type="text" id="cpf" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="000.000.000-00" required>
   
    <label for="datNasc">data de Nascimento:</label>
    <input type="date" id="DatNasc" name="datNasc" required>

    <label for="email">email</label>
    <input type="email" id="email" name="email" required>

    <button type="submit">Cadastrar</button>
    <button type="reset" class="clear-button">Limpar</button>
</form>


</body>
</html>
