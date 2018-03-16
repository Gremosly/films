<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="text/css" type="image/x-icon" href="../../template/icons/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../../template/css/main1.css">
	<link rel="stylesheet" type="text/css" href="../../template/css/header_images1.css">
	<meta charset="UTF-8">
	<title>Admin</title>
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

		<a href="/logout"><img src="../../template/icons/padlock.svg" alt="settings" class="logout"></a>

		
		<br>
        <div class="form_add_content">
            <h2 class="admin_panel">Панель администратора</h2>
           

           	<img src="../../template/icons/plus.svg" alt="plus" class="plus1" id="plus1">
			<a href="/settings/new_film"><h3 class="add_film" id="add_film">Добавить фильм</h3></a>

			<img src="../../template/icons/plus.svg" alt="plus" class="plus2" id="plus2">
			<a href="/settings/new_serial"><h3 class="add_serial" id="add_serial">Добавить сериал</h3></a>
			
        </div>
		
		<script>
			plus1.onmouseover = function(){add_film.style.color='#bac1d8',plus1.style.content="url(../../template/icons/plus_light.svg)"};
			plus1.onmouseout = function(){add_film.style.color='#5C5C5C',plus1.style.content="url(../../template/icons/plus.svg)"};

			add_film.onmouseover = function(){plus1.style.content="url(../../template/icons/plus_light.svg)",add_film.style.color='#bac1d8'};
			add_film.onmouseout = function(){plus1.style.content="url(../../template/icons/plus.svg)",add_film.style.color='#5C5C5C'};

			plus2.onmouseover = function(){add_serial.style.color='#bac1d8',plus2.style.content="url(../../template/icons/plus_light.svg)"};
			plus2.onmouseout = function(){add_serial.style.color='#5C5C5C',plus2.style.content="url(../../template/icons/plus.svg)"};

			add_serial.onmouseover = function(){plus2.style.content="url(../../template/icons/plus_light.svg)",add_serial.style.color='#bac1d8'};
			add_serial.onmouseout = function(){plus2.style.content="url(../../template/icons/plus.svg)",add_serial.style.color='#5C5C5C'};
		</script>

	</div>
</body>
</html>