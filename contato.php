<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="stylehumberto.css">
    <title>Fale-conosco</title>
-
</head>
<body>
-



-
    
    <form action="envia.php" method="POST">
        <strong>Atendimento Telefônico:</strong> 081 3428-5051 | 3428-5151 <br> <br>

        Caso prefira, utilize o formulário abaixo para enviar sua mensagem: <br> <br>

        <label for="complemento">Assunto:</label> <br>

        <select name="assunto">
        <option value="0">Financeiro</option>
        <option value="1">Correção | SICAP</option>
        <option value="2">Melhoria | SICAP</option>
  </select> <br> <br>

        <label for="complemento">Complemento do assunto:</label> <br>
        <input type="text" name="complemento"> <br>

        <label for="nome">Nome:</label> <br>
        <input type="text" name="nome" required > <br>

        <label for="nome">Email:</label> <br>
        <input type="email" name="email" required > <br>

        <label for="telefone">Telefone:</label> <br>
        <input type="number" name="telefone" required > <br>

        <label for="mensagem">Mensagem:</label> <br>
        <textarea type="text" name="mensagem" required> </textarea> <br>
        <input id="btn" type="submit" name="Enviar">
    </form>

</body>
</html>