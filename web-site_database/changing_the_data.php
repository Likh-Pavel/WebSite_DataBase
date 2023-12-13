<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public/style_registration.css">
    <title>Estate Empire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Обязательный (и достаточный) тег для браузеров -->
    <link type="image/x-icon" rel="shortcut icon" href="/icons/favicon.ico">

    <!-- Дополнительные иконки для десктопных браузеров -->
    <link type="image/png" sizes="16x16" rel="icon" href="./favicon-16x16.png">
    <link type="image/png" sizes="32x32" rel="icon" href="./favicon-32x32.png">
    <link type="image/png" sizes="96x96" rel="icon" href="./favicon-96x96.png">
    <link type="image/png" sizes="120x120" rel="icon" href="./favicon-120x120.png">

    <!-- Иконки для Android -->
    <link type="image/png" sizes="72x72" rel="icon" href="./android-icon-72x72.png">
    <link type="image/png" sizes="96x96" rel="icon" href="./android-icon-96x96.png">
    <link type="image/png" sizes="144x144" rel="icon" href="./android-icon-144x144.png">
    <link type="image/png" sizes="192x192" rel="icon" href="./android-icon-192x192.png">
    <link type="image/png" sizes="512x512" rel="icon" href="./android-icon-512x512.png">
    <link rel="manifest" href="./manifest.json">

    <!-- Иконки для iOS (Apple) -->
    <link sizes="57x57" rel="apple-touch-icon" href="./apple-touch-icon-57x57.png">
    <link sizes="60x60" rel="apple-touch-icon" href="./apple-touch-icon-60x60.png">
    <link sizes="72x72" rel="apple-touch-icon" href="./apple-touch-icon-72x72.png">
    <link sizes="76x76" rel="apple-touch-icon" href="./apple-touch-icon-76x76.png">
    <link sizes="114x114" rel="apple-touch-icon" href="./apple-touch-icon-114x114.png">
    <link sizes="120x120" rel="apple-touch-icon" href="./apple-touch-icon-120x120.png">
    <link sizes="144x144" rel="apple-touch-icon" href="./apple-touch-icon-144x144.png">
    <link sizes="152x152" rel="apple-touch-icon" href="./apple-touch-icon-152x152.png">
    <link sizes="180x180" rel="apple-touch-icon" href="./apple-touch-icon-180x180.png">

    <!-- Иконки для MacOS (Apple) -->
    <link color="#e52037" rel="mask-icon" href="./safari-pinned-tab.svg">

    <!-- Иконки и цвета для плиток Windows -->
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-TileImage" content="./mstile-144x144.png">
    <meta name="msapplication-square70x70logo" content="./mstile-70x70.png">
    <meta name="msapplication-square150x150logo" content="./mstile-150x150.png">
    <meta name="msapplication-wide310x150logo" content="./mstile-310x310.png">
    <meta name="msapplication-square310x310logo" content="./mstile-310x150.png">
    <meta name="application-name" content="My Application">
    <meta name="msapplication-config" content="./browserconfig.xml">
</head>


<?php
require_once 'connect/connect.php';
$house_id = $_GET['id'];
$query1 = "SELECT * FROM `homes` WHERE `id` = '$house_id'";
$home = mysqli_query($link, $query1);
$home = mysqli_fetch_assoc($home);
?>


<body class="body">
    <header>
        <div class="block1">
            <div class="container text-center">
                <div class="row">
                    <div class="col-1">
                        <div class="block2" class="col-md-4 offset-md-4">
                            <img src="/img/logo1.png" width="170%" height="170%" alt="logo" />
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="block3">
                            <h2><b>Estate Empire</b></h2>
                        </div>
                    </div>

                    <div class="col-7">
                        <div class="block4">
                            <div class="row">
                                <div class="col">
                                    <h4>Москва, ул. Наметкина, д. 6</h4>
                                </div>
                                <div class="col">
                                    <h4> <img src="/img/16.png" width="20" height="15" alt=""> 8-988-111-11-00</h4>
                                </div>
                                <div class="col">
                                    <h4><img src="/img/4.png" width="20" height="15" alt=""> info@msc43.ru</h4>
                                </div>
                                <div class="col">
                                    <h4>Социальные сети <img src="/img/ok.jpg" width="20" height="20" alt=""><img
                                            src="/img/social_icons_vk-768x768.png" width="20" height="20" alt=""><img
                                            src="/img/WhatsApp-Logo-Transparent-PNG.png" width="20" height="20" alt="">
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div id="about" style="position: relative; left: 0px; top: 0px">
                            <a href="/" onclick="slowScroll('#top')">Главная</a>
                            <a href="#" onclick="slowScroll('#main')">Поиск недвижимости</a>
                            <a href="#" onclick="slowScroll('#news')">Новости</a>
                            <a href="#" onclick="slowScroll('#about')">О нас</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about1">
            <h5><a href="/" class="btn3">Главная</a> /&nbsp;</h5>
            <h5 class="about2">Изменение
                <?= $home['name'] ?>
            </h5>
        </div>
    </header>

    <div class="top">
        <div class="container text-center">
            <div class="block9">

                <h1 class="card-title">Изменение</h1>
                <br>
                <div>
                    <form action="vendor/update.php" method="post">
                        <input type="hidden" name="id" value="<?= $house_id ?>">
                        <input class="form-control" id="exampleFormControlInput1" value="<?= $home['name'] ?>"
                            v-mode="houses.name" placeholder="Наименование" type="text" name="name">
                        <br>

                        <input class="form-control" id="exampleFormControlInput2" value="<?= $home['price'] ?>"
                            v-mode="houses.price" placeholder="Цена" type="text" name="price">
                        <br>

                        <input class="form-control" id="exampleFormControlInput3" value="<?= $home['plot_area'] ?>"
                            v-mode="houses.plot_area" placeholder="Площадь здания" type="text" name="plot_area">
                        <br>

                        <input class="form-control" id="exampleFormControlInput4" value="<?= $home['building_area'] ?>"
                            v-mode="houses.building_area" placeholder="Площадь земли" type="text" name="building_area">
                        <br>

                        <input class="form-control" id="exampleFormControlInput5" value="<?= $home['telephone'] ?>"
                            v-mode="houses.telephone" placeholder="Телефон" type="text" name="telephone">
                        <br>

                        <input class="form-control" id="exampleFormControlInput6" value="<?= $home['area'] ?>"
                            v-mode="houses.area" placeholder="Область" type="text" name="area">
                        <br>


                        <input class="form-control" id="exampleFormControlInput7" value="<?= $home['description'] ?>"
                            v-mode="houses.description" placeholder="Описание" type="text" name="description">
                        <br>

                        <button class="btn1" @click="saveflowers" type="submit">Изменить</button>
                    </form>
                    <br><br>
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <br><br>
    <br><br><br>

    <div class="block8">
        <h2>Агентство "Estate Empire", г. Москва, ул. Намёткина, д. 6</h2>
        <div class="row">
            <div class="col">
                <h3> <img src="/img/16.png" width="20" height="15" alt=""> 8-988-111-11-00</h3>
            </div>
            <div class="col">
                <h3><img src="/img/4.png" width="20" height="15" alt=""> info@msc43.ru</h3>
            </div>
            <div class="col">
                <h3>Социальные сети <img src="/img/ok.jpg" width="20" height="20" alt=""><img
                        src="/img/social_icons_vk-768x768.png" width="20" height="20" alt=""><img
                        src="/img/WhatsApp-Logo-Transparent-PNG.png" width="20" height="20" alt=""></h3>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>