<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="text/css" type="image/x-icon" href="../../template/icons/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../../template/css/main1.css">
	<link rel="stylesheet" type="text/css" href="../../template/css/header_images1.css">
	<meta charset="UTF-8">
	<title>LogIn</title>
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

        <div class="signup-form"><!--sign up form-->
            <h2 class="login_logo">Вход на сайт</h2>

			<?php if (isset($error)&&$error!=false): ?>
	            <?php echo '<em>'.$error.'</em><br>'; ?> 
	        <?php endif; ?>

			
            <form action="" method="post">
                <input class="login" type="login" name="login" placeholder="Login" value="<?php echo $login; ?>"/>
                <input class="password" type="password" name="password" placeholder="Password" value="<?php echo $password; ?>"/>
                <input type="submit" name="submit" class="btn btn-default" value="Вход"/>
            </form>
        </div><!--/sign up form-->
		
		<img src="../../template/icons/arrow-left.svg" alt="arrow-left" class="arrow-left" id="one">
		<a href="/films"><p class="on_main" id="two">На главную<p></a>

		<script>
			one.onmouseover = function(){two.style.color='#bac1d8',one.style.content="url(../../template/icons/arrow-left_light.svg)"};
			one.onmouseout = function(){two.style.color='#5C5C5C',one.style.content="url(../../template/icons/arrow-left.svg)"};
			two.onmouseover = function(){one.style.content="url(../../template/icons/arrow-left_light.svg)",two.style.color='#bac1d8'};
			two.onmouseout = function(){one.style.content="url(../../template/icons/arrow-left.svg)",two.style.color='#5C5C5C'};
		</script>

	</div>
</body>
</html>