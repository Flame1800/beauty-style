<?php
$link = mysqli_connect("localhost", "root", "", "beauty-style");

if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv=Content-Type content="text/html; charset=windows-1251" />
    <title>Document</title>
    <link href="styles/index.css" rel="stylesheet">
    <link href="styles/form.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="content">
        <img src="img/logo.svg" class="logo" />
                <nav>
                    <a href="index.html" class="nav-link">Главная</a>
                    <a href="catalog.html" class="nav-link">Каталог</a>
                    <a href="form.html" class="nav-link">Запись на процедуру</a>
                    <a href="education.html" class="nav-link">Обучение / Стать сотрудником</a>
                </nav>
    </div>
</header>

<div class="container">
    <div class="form-content">
        <div class="title">
            <?php
                $sql = mysqli_query($link, "INSERT INTO applications (`name`, `phone`) VALUES ('{$_POST['name']}', '{$_POST['phone']}')");
                //Если вставка прошла успешно
                if ($sql) {
                echo '<p>Данные успешно добавлены в таблицу.</p>';
                } else {
                echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
                }
            ?>
        </div>
           <a href='index.html' class='button'>
                На главную
           </a>
    </div>
</div>

<footer>
    <div class="content">
        <div class="address">
            ООО «SityStale»
            <br/>
            г. Сургут, - Сибирская 11Б
        </div>
        <div class="right">
            <img src="img/logo.svg" class="logo" />
            <div class="contacts">
                vk, inst, tg
            </div>
        </div>
    </div>
</footer>
</body>
</html>