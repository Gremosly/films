<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="text/css" type="image/x-icon" href="../../template/icons/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../../template/css/main1.css">
	<link rel="stylesheet" type="text/css" href="../../template/css/header_images1.css">
	<link rel="stylesheet" type="text/css" href="../../template/css/new.css">
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
            <h2 class="admin_panel">Панель администратора(Добавление фильма)</h2>
			
			<?php if (isset($error)&&$error!=false): ?>
	            <?php echo '<em>Заполните все поля!</em><br>'; ?> 
	        <?php endif; ?>

			<form action="" method="post">

                <input class="filmName" type="text" name="filmName" placeholder="Название фильма" value="<?php echo $filmName; ?>"/>

                <input class="year" type="text" name="year" placeholder="Год выхода" value="<?php echo $year; ?>"/>

                <input class="country" type="text" name="country" placeholder="Страна" value="<?php echo $country; ?>"/>

                <input class="poster_img" type="text" name="poster" placeholder="Постер" value="<?php echo $poster; ?>"/>

                <input class="video" type="text" name="video" placeholder="Видео" value="<?php echo $video; ?>"/>

                <textarea name="description" id="description" class="description" placeholder="Описание"><?php echo $description; ?></textarea>

                <input type="submit" name="submit" class="btn btn-default" value="Добавить"/>
            </form>
          
           	
			
        </div>
		
		

	</div>
</body>
</html>