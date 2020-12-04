<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário senha de email</title>
</head>
<body>
    <form action="Senhaemail.php" method="POST">
        <label for="nome">Nome Completo</label>
        <input type="text" name="nome" placeholder="Qual é o seu nome">
        <br><br>
        <label for="Pais">Pais</label>
        <select name="pais" >
            <option value="Selecione um País"></option>
            <option value="brasil">Brasil</option>
            <option value="usa">Estados Unidos</option>
        </select>
        <br><br>
        <label for="mensagem" >Mensagem</label>
        <textarea name="mensagem" cols="30" rows="10" placeholder="Insira sua mensagem aqui" ></textarea>
        <input type="submit" value="Enviar">        
    </form>
</body>
</html>