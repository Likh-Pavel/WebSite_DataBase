<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/public/style.css">
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
    require_once'connect/connect.php';
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
							<a href="#" onclick="slowScroll('#top')">Главная</a>
							<a href="#" onclick="slowScroll('#main')">Поиск недвижимости</a>
							<a href="#" onclick="slowScroll('#news')">Новости</a>
							<a href="#" onclick="slowScroll('#about')">О нас</a>
						</div>
					</div>

					<div class="col-1">
						<a href="entrance.php" class="btn1">Войти</a>
					</div>
				</div>
			</div>
		</div>
	</header>




	<div class="top" id="top">
		<h1>ПРЕДЛОЖЕНИЕ МЕСЯЦА</h1>

		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
					aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
					aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
					aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="img1">
						<img src="/img/дом1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-caption d-none d-md-block">
						<div class="block5">
							<h5>УНИКАЛЬНЫЙ ПЕНТХАУС С ПАНАРАМНЫМИ ...</h5>
							<br><br>
							<h6>Условный текст, который придумал дизаайнер исключительно для наглядности</h6>
							<a href="page/new.html" class="btn2">Перейти</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="img1">
						<img src="/img/дом1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-caption d-none d-md-block">
						<div class="block5">
							<h5>УНИКАЛЬНЫЙ ПЕНТХАУС С ПАНАРАМНЫМИ ...</h5>
							<br><br>
							<h6>Условный текст, который придумал дизаайнер исключительно для наглядности</h6>
							<a href="page/new.html" class="btn2">Перейти</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="img1">
						<img src="/img/дом1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-caption d-none d-md-block">
						<div class="block5">
							<h5>УНИКАЛЬНЫЙ ПЕНТХАУС С ПАНАРАМНЫМИ ...</h5>
							<br><br>
							<h6>Условный текст, который придумал дизаайнер исключительно для наглядности</h6>
							<a href="page/new.html" class="btn2">Перейти</a>
						</div>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>

	<br><br>
	<hr class="hr1">
	<br><br>

	<div class="main" id="main">
		<h1>ПОИСК НЕДВИЖЕМОСТИ</h1>


		<div class="container text-center">
			<div class="block9">


				<?php
				$query = "SELECT * FROM `homes`";
				$houses = mysqli_query($link,$query);
				$houses = mysqli_fetch_all($houses);
				foreach ($houses as $house) {
				?>

				
				<div class="col">
					<div class="col-3">
						<a href="contacts.php?id=<?=$house[0]?>" class="link">
							<div class="block8">
								<div class="block10">
									<h5 class="card-title"><?=$house[1]?></h5>
								</div>
								<img src="/img/дом2.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h6 class="card-title">Область: <b><?=$house[7]?></b></h6>
									<h6 class="card-title">Цена: <b><?=$house[2]?></b> <img src="/img/рубль2.png"
											width="5%" height="5%" alt=""></h6>
									<h6 class="card-title">Площадь дома: <b><?=$house[3]?> м<sup>2</sup></b></h6>
									<h6 class="card-title">Площадь участка: <b><?=$house[4]?> сот.</b></h>
								</div>
							</div>
						</a>
					</div>
					

				</div>
				<?php
				}
				?>

				<div class="col-1">
					<a href="add.php" class="btn1">ДОБАВИТЬ</a>
				</div>


			</div>
		</div>
	</div>

	<br><br>
	<hr class="hr1">
	<br><br>

	<div class="news" id="news">
		<h1>НОВОСТИ</h1>

		<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
					aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
					aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
					aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active" data-bs-interval="10000">
					<div class="img1">
						<img src="/img/Новости1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-caption d-none d-md-block">
						<div class="block7">
							<h5>Какие субсидии и льготы на покупку жилья можно получить от государства</h5>
							<br><br>
							<h6>Получить субсидии и льготы на покупку жилья — как с ипотекой, так и
								без — от государства вполне реально. Рассказываем подробнее о самых
								популярных.</h6>
							<a href="https://blog.domclick.ru/nedvizhimost/post/kakie-subsidii-i-lgoty-na-pokupku-zhilya-mozhno-poluchit-ot-gosudarstva"
								class="btn2">Войти</a>
						</div>
					</div>
				</div>
				<div class="carousel-item" data-bs-interval="2000">
					<div class="img1">
						<img src="/img/Новости1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-caption d-none d-md-block">
						<div class="block7">
							<h5>Какие субсидии и льготы на покупку жилья можно получить от государства</h5>
							<br><br>
							<h6>Получить субсидии и льготы на покупку жилья — как с ипотекой, так и
								без — от государства вполне реально. Рассказываем подробнее о самых
								популярных.</h6>
							<a href="https://blog.domclick.ru/nedvizhimost/post/kakie-subsidii-i-lgoty-na-pokupku-zhilya-mozhno-poluchit-ot-gosudarstva"
								class="btn2">Войти</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="img1">
						<img src="/img/Новости1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-caption d-none d-md-block">
						<div class="block7">
							<h5>Какие субсидии и льготы на покупку жилья можно получить от государства</h5>
							<br><br>
							<h6>Получить субсидии и льготы на покупку жилья — как с ипотекой, так и
								без — от государства вполне реально. Рассказываем подробнее о самых
								популярных.</h6>
							<a href="https://blog.domclick.ru/nedvizhimost/post/kakie-subsidii-i-lgoty-na-pokupku-zhilya-mozhno-poluchit-ot-gosudarstva"
								class="btn2">Войти</a>
						</div>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
				data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>

	<br><br>
	<hr class="hr1">
	<br><br>

	<div class="about">
		<h1>О НАС</h1>
		<img src="/img/О нас1.png" class="img2" alt="...">
		<br>
		<br>
		<h2> Компания «Estate Empire» - это крупнейшее агентство недвижимости сегодняшний день.
			За время добросовестной и упорной работы, мы не только заслужили доверие большого количества клиентов,
			но и расширили круг своей компетенции и набрались огромного опыта.</h2>
		<br>
		<h2>Персонал нашей компании – это опытные консультанты в разных областях недвижимости.
			Мы грамотно проконсультируем собственников, а также пользователей недвижимости по
			таким вопросам как: - покупка, продажа или сдача недвижимости в аренду; - привлечение
			инвестиций; - исследование рынка.</h2>
		<br>
		<h2>Мы соблюдаем международные стандарты ведения бизнеса и на рынке услуг строим цивилизованные
			отношения. Наш опыт позволяет нам работать на профессиональном уровне с такими видами объектов
			как новостройка, готовая квартира, загородный дом, коттедж, а также коммерческая недвижимость
			и таунхаус. Услуги наших риэлторов охватывают все аспекты сделок, которые совершаются
			нашими клиентами. Большое внимание мы уделяем правовой защите потребителей, поэтому
			гарантируем открытость информации о стоимости всех работ.</h2>
	</div>

	<br><br>
	<br><br>

	<div class="block6">
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