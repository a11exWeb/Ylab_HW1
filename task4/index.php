<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h2 class="mt-4">Home work 1.4 </h2>
    <div class="col-3 mt-4">
        <form action="action.php" method="get">
            <div class="form-group mb-3">
                <label for="exampleInputName">Имя</label>
                <input type="name" required name="name" class="form-control" id="exampleInputName" placeholder="Введите имя">
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputSurname">Фамилия</label>
                <input type="name" required name="surname" class="form-control" id="exampleInputSurname" placeholder="Введите фамилию">
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
</div>

</body>
</html>

