
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="text/css" type="image/x-icon" href="../../template/icons/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../../template/css/header_images1.css">
	<link rel="stylesheet" type="text/css" href="../../template/css/main1.css">
	<meta charset="UTF-8">
	<title>Films</title>
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


		<?php foreach ($filmList as $filmItem): ?>
			<div class="film_item">
				<a href="film/<?php echo $filmItem['filmId']; ?>"><img src="<?php echo $filmItem['poster']; ?>" alt="" class="poster"></a>	
				<a href="film/<?php echo $filmItem['filmId']; ?>"><p><?php echo $filmItem['filmName']; ?></p></a>		
			</div>
		<?php endforeach ?>


<script type="text/javascript" language="javascript" src="../../template/js/light.js"></script>

	</div>
</body>
</html>