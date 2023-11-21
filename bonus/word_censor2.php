<?php
$replace_word = $_POST["word"];
$text = $_POST["text"];
$censored_text = str_ireplace($replace_word, '***', $text);
$modified_text = strtoupper($text);
$text_to_array = explode(' ', $modified_text);
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
    <p>
        <?php echo $modified_text;
        var_dump($text_to_array); ?>
    </p>


</body>

</html>