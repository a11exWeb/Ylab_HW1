<?php

$name= '';
$surname= '';

if (isset($_GET["name"])){
    $name = htmlspecialchars($_GET["name"]);
    $name = trim($name);
    $name = strtolower($name);
    $name = ucfirst($name);
}

if (isset($_GET["surname"])){
    $surname = htmlspecialchars($_GET["surname"]);
    $surname = trim($name);
    $surname = strtolower($name);
    $surname = ucfirst($name);
}

?>

<!doctype html>
 <html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ylab_HW_1.2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-6 mt-3">
                <?= "Привет, $name $surname."; ?>
            </div>
        </div>
    </div>
</body>
</html>

