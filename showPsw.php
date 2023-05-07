<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <div class="al-h container d-flex flex-column justify-content-center align-items-center gap-2">
        <strong class="al-m pe-1">La password generata per te è: </strong>
        <span><?php 
            foreach($_SESSION["chars"] as $car)
                echo $car;
        ?></span>

        <div class="d-flex justify-content-center align-items-center mt-2">
            <a href="index.html" class="al-button">Torna alla home</a>
        </div>
    </div>
</body>
</html>