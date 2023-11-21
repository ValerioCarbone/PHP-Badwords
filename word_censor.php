<?php
$replace_word = $_POST["replace_word"];
$text = 'Esistono innumerevoli variazioni dei passaggi del Lorem Ipsum, ma la maggior parte hanno subito delle variazioni del tempo, a causa dell’inserimento di passaggi ironici, o di sequenze casuali di caratteri palesemente poco verosimili. Se si decide di utilizzare un passaggio del Lorem Ipsum, è bene essere certi che non contenga nulla di imbarazzante. In genere, i generatori di testo segnaposto disponibili su internet tendono a ripetere paragrafi predefiniti, rendendo questo il primo vero generatore automatico su intenet. Infatti utilizza un dizionario di oltre 200 vocaboli latini, combinati con un insieme di modelli di strutture di periodi, per generare passaggi di testo verosimili. Il testo così generato è sempre privo di ripetizioni, parole imbarazzanti o fuori luogo ecc';
$censored_text = str_ireplace($replace_word, '***', $text);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Replace word</title>
</head>

<body>
    <p>
        <?php echo $text; ?>
    </p>
    <p>
        <?php echo strlen($text); ?>
    </p>
    <p>
        <?php echo $censored_text; ?>
    </p>
    <p>
        <?php echo strlen($censored_text); ?>
    </p>

</body>

</html>