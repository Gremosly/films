<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="text/css" type="image/x-icon" href="../../template/icons/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../../template/css/main1.css">
	<link rel="stylesheet" type="text/css" href="../../template/css/header_images1.css">
	<meta charset="UTF-8">
	<title>Serial</title>
</head>
<body>	
	<div class="header">
		<img src="../../template/images/plenka.png" alt="lenta" class="lenta">
		<img src="../../template/images/home_alone.png" alt="home_alone" class="home_alone">
		<img src="../../template/images/matrix.png" alt="matrix" class="matrix">
		<img src="../../template/images/terminator.png" alt="terminator" class="terminator">
		<img src="../../template/images/ridik.png" alt="ridik" class="ridik">
		<img src="../../template/images/day.png" alt="day" class="day">
		<img src="../../template/images/evil.png" alt="evil" class="evil">
		<img src="../../template/images/2012.png" alt="2012" class="s2012">
		<img src="../../template/images/avatar.png" alt="avatar" class="avatar">
		<img src="../../template/images/dark.png" alt="dark" class="dark">
		<img src="../../template/images/spider_man.png" alt="spider_man" class="spider_man">
		<img src="../../template/images/furious.png" alt="furious" class="furious">
	</div>

	<div class="container">
		<a href="/films"><p class="film_logo">Фильмы</p></a>
		<a href="/serials"><p class="serial_logo">Сериалы</p></a>
		<?php if (user::checkLogged()): ?>
			<a href="/settings/new"><p class="add_content">Добавление контента</p></a>
		<?php endif ?>

		<?php if (user::checkLogged()): ?>

			<a href="/logout"><img src="../../template/icons/padlock.svg" alt="logout" class="logout"></a>

		<?php else: ?>

			<a href="/settings"><img src="../../template/icons/settings.svg" alt="settings" class="settings"></a>

		<?php endif ?>
		
		<i class="flug"></i>

		<img class="film_image" src="<?php echo $serial['picture']; ?>" alt="poster">
		<p class="film_name">Название сериала:</p>
		<p class="film_name1"><?php echo $serial['tvSerialName']; ?></p>

		<?php if (user::checkLogged()): ?>
			<a href="/settings/edit_serial/<?php echo $serial['tvSerialId']; ?>"><img class="edit" src="../../template/icons/wrench.svg" alt="wrench"></a>
		<?php endif ?>

		<p class="film_year">Год выхода:</p>
		<p class="film_year1"><?php echo $serial['year']; ?></p>

		<p class="film_country">Страна:</p>
		<p class="film_country1"><?php echo $serial['country']; ?></p>

		<p class="film_description">Описание:</p>
		<p class="film_description1"><?php echo $serial['description']; ?></p>

		<p class="watch_online">Смотреть онлайн</p>
		<video class="film_video" controls="controls">
		   <source src="<?php echo $serial['video']; ?>" type='video/ogg; codecs="theora, vorbis"'>
		</video>

	</div>
</body>
</html>

