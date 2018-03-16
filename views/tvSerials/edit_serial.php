<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="text/css" type="image/x-icon" href="../../template/icons/favicon.ico">s
	<link rel="stylesheet" type="text/css" href="../../template/css/main1.css">
	<link rel="stylesheet" type="text/css" href="../../template/css/header_images1.css">
	<link rel="stylesheet" type="text/css" href="../../template/css/new.css">
	<meta charset="UTF-8">
	<title>Admin</title>
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

		<a href="/logout"><img src="../../template/icons/padlock.svg" alt="settings" class="logout"></a>

		
		<br>
        <div class="form_add_content">
            <h2 class="admin_panel">Панель администратора(Изменение сериала)</h2>
			
			<?php if (isset($error)&&$error!=false): ?>
	            <?php echo '<em>Заполните все поля!</em><br>'; ?> 
	        <?php endif; ?>

			<form action="" method="post">

                <input class="filmName" type="text" name="tvSerialName" placeholder="Название сериала" value="<?php echo $serialName; ?>"/>
                <a href="/delete_serial/<?php echo $serialId; ?>"><p class="delete" >Удалить сериал<p></a>

                <input class="year" type="text" name="year" placeholder="Год выхода" value="<?php echo $year; ?>"/>

                <input class="country" type="text" name="country" placeholder="Страна" value="<?php echo $country; ?>"/>

                <input class="poster_img" type="text" name="picture" placeholder="Постер" value="<?php echo $picture; ?>"/>

                <input class="video" type="text" name="video" placeholder="Видео" value="<?php echo $video; ?>"/>

                <textarea name="description" id="description" class="description" placeholder="Описание"><?php echo $description; ?></textarea>

                <input type="submit" name="submit" class="btn btn-default" value="Изменить"/>
            </form>
          
           	
			
        </div>
		
		

	</div>
</body>
</html>