<?php

include __DIR__ . '/../database.php';

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prima Versione</title>
</head>
<body>
    
    <?php

        foreach($database as $cards => $singleCard) {
            echo "<div> <img src='" . $singleCard["poster"] . "'/> . <div> <h3>" . $singleCard["title"] . "</h3> <p>" . $singleCard["author"] . "</p> <p>" . $singleCard["year"] . "</p> </div> </div>";
        }


    ?>



</body>
</html>