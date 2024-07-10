<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACountry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/7886c5bb69.js" crossorigin="anonymous"></script>
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="accets/css/style.css">
</head>
<body>
<!-- HEADER -->
<?php
    include("app/include/header.php");
    ?>
<!-- HEADER -->

<!-- form -->
<div class = "container reg_form">
    <form class = "row justify-content-center" method="post" action="log.html">
        <h2>Авторизация</h2>
        <div class="mb-3 col-12 col-md-4">
            <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="введите ваш логин">
        </div>
        <div class="w-100"></div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="w-100"></div>
        <button type="button" class="btn btn-outline-secondary mb-3 col-12 col-md-4" style = "width: 200px">Войти</button>
        <a href="aut.html">Регистрация</a>
    </form>
</div>
<!-- form -->
<?php
include("app/include/footer.php");
?>
</body>
</html>