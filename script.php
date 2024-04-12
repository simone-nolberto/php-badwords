

<?php

var_dump($_POST);

$sentence = $_POST['userSentence'];
// $sentenceLength = $_POST['userSentence'].strlen;
$bad_word = $_POST['badWord'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato del Censuratore</title>
</head>
<body>

<p> <?php echo $sentence ?> </p>
<!-- <p> <?php echo $sentenceLength ?> </p> -->


</body>
</html>