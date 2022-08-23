<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    $stringa='Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam nam quidem veritatis! Obcaecati laboriosam iusto nulla, ex fuga minus omnis distinctio porro harum ad excepturi explicabo culpa natus, quisquam qui.';

    // http://localhost:8888/45_php-badwords/php-badwords/?word=Lorem sostituisce Lorem con i puntini

    $stringaCensurata=str_replace($_GET['word'],'***',$stringa);
    echo $stringaCensurata

?>
    
</body>
</html>