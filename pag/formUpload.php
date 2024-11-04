<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
     <body style="text-align: center; margin: 30px 0">
        <fieldset>
            <legend style="text-align: left">Selecione o arquivo</legend>
            <form method="POST" enctype="multipart/form-data" action="controller/recebe.php">
                <input type="hidden" name="id_user" value="<?=$_SESSION['id_user']?>">
                <input type="file" name="arquivo" required>
                <input type="submit" value="Enviar">
            </form>
        </fieldset>
    </body>
</html>