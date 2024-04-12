

<?php

// var_dump($_POST);

$sentence = $_POST['userSentence'];
$sentenceLength = strlen($sentence);
$bad_word = $_POST['badWord'];
// $sentence_words = explode(" " ,$sentence);

$warning = '';
$politeSentence = '';

// if (in_array("$bad_word", $sentence_words)) {
//    $warning = "sei molto scurrile, sarai censurato!";

// } else {
//     $warning = "Bravo, usi un linguaggio nobile!";
// }


if ($sentenceLength === 0) {
   $warning = 'Forse dovresti scrivere qualcosa prima!';
    $politeSentence = 'Non abbiamo potuto eseguire il nostro lavoro di inquisitori';

} else if (str_contains($sentence, "$bad_word")) {
    $warning = 'sei molto scurrile, sarai censurato!';
    $politeSentence = str_ireplace("$bad_word", "***", $sentence);

} else {
    $warning = "Bravo, usi un linguaggio nobile, pertanto la tua frase non ha bisogno di censura!";
    $politeSentence = $sentence;
}

// var_dump($sentence, $bad_word, $sentenceLength, $sentence_words);

?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato del Censuratore</title>

</head>
<body>
<div>
    <p>La frase inserita dall'utente è: </p>
    <p>"<?php echo $sentence ?>"</p>
    <p> ed è lunga <?php echo $sentenceLength ?> caratteri.</p> 
</div>

<div>
    <p><?php echo $warning ?></p>
    <p>La nuova frase è: </p>
    <p> <?php echo $politeSentence ?></p>

</div>



</body>
</html>