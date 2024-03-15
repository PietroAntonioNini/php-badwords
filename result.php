<?php

$paragraph = $_GET['paragraph'];
$paragraphLenght = strlen($paragraph);

$badWords = $_GET['badWords'];

$paragraphCensured = str_ireplace($badWords, '***', $paragraph);
$paragraphCensuredLenght = strlen($paragraphCensured);

?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div class="container text-center">

        <h1 class="fs-1 text-center mt-5 mb-5">PHP Badwords</h1>
        
        <div class="original">
            <span class="fs-3">Paragrafo Originale:</span><br>
            <span class="fs-6 mt-3">Lunghezza: <?php echo $paragraphLenght ?> caratteri</span>
            <p class="mt-3 mb-5"><?php echo $paragraph ?></p>
        </div>

        <div class="censured">
            <span class="fs-3">Paragrafo Censurato:</span><br>
            <span class="fs-6 mt-3">Lunghezza: <?php echo $paragraphCensuredLenght ?> caratteri</span>
            <p class="mt-3"><?php echo $paragraphCensured ?></p>
        </div>

    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>