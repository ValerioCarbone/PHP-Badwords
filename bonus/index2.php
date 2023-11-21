<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="word_censor2.php" method="POST">
        <label for="word">Inserisci la parola da censurare</label>
        <input type="text" name="word">
        <label for="text">Inserisci testo da censurare</label>
        <textarea name="text" cols="30" rows="10"></textarea>
        <input type="submit" value="Invia">
    </form>
</body>

</html>