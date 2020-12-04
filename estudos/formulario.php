<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário senha de email</title>
</head>
<body>
    <form action="sedmail.php" method="POST">
        <label for="nome">Nome Completo</label>
        <br> <br>
        <input type="text" name="nome" placeholder="Qual é o seu nome">
        <br><br>
        <label for="Pais">Pais</label>
        <br> <br>
        <select name="pais" >
            <option value="Selecione um País">Selecione um País</option>
            <option value="brasil">Brasil</option>
            <option value="usa">Estados Unidos</option>
        </select>
        <br><br>
        <label for="mensagem" >Mensagem</label>
        <br><br>
        <textarea name="mensagem" cols="20" rows="05" placeholder="Insira sua mensagem aqui" ></textarea>
        <br><br>
        <input type="submit" value="Enviar">        
    </form>
</body>
</html>