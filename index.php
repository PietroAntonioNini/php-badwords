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
    <h1 class="fs-1 text-center mt-5 mb-5">PHP Badwords</h1>

    <form action="result.php" method="GET">
        <div class="container mt-5 mb-4">
            <textarea class="form-control" name="paragraph" rows="3"></textarea>
        </div>

        <div class="container mb-5 text-center">
            <label for="badwords" class="form-label">Parola da censurare</label>
            <input type="text" class="form-control" id="badwords" name="badWords">
        </div>

        <div class="col-12 text-center">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>



    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>