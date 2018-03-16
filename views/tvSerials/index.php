<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="text/css" type="image/x-icon" href="../../template/icons/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../../template/css/main1.css">
	<link rel="stylesheet" type="text/css" href="../../template/css/header_images1.css">
	<meta charset="UTF-8">
	<title>Serials</title>
</head>
<body>	
	<div class="header">
		<img src="../../template/images/plenka.png" alt="lenta" class="lenta">
		<img src="../../template/images/prison.png" alt="prison" class="home_alone">
		<img src="../../template/images/bad.png" alt="bad" class="matrix">
		<img src="../../template/images/100.png" alt="100" class="terminator">
		<img src="../../template/images/lost.png" alt="lost" class="ridik">
		<img src="../../template/images/dead.png" alt="dead" class="day">
		<img src="../../template/images/house.png" alt="house" class="evil">
		<img src="../../template/images/ship.png" alt="ship" class="s2012">
		<img src="../../template/images/friends.png" alt="friends" class="avatar">
		<img src="../../template/images/revolution.png" alt="revolution" class="dark">
		<img src="../../template/images/arrow.png" alt="arrow" class="spider_man">
		<img src="../../template/images/limitless.png" alt="limitless" class="furious">
		
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

		<?php foreach ($tvSerialsList as $tvSerialItem): ?>
			<div class="film_item">
				<a href="serial/<?php echo $tvSerialItem['tvSerialId']; ?>"><img src="<?php echo $tvSerialItem['picture']; ?>" alt="" class="poster"></a>
				<i></i>
				<a href="serial/<?php echo $tvSerialItem['tvSerialId']; ?>"><p><?php echo $tvSerialItem['tvSerialName']; ?></p></a>
				<i></i>
			</div>
		<?php endforeach ?>


	<script type="text/javascript" language="javascript" src="../../template/js/light.js"></script>
	</div>
	</div>/body>
</html>