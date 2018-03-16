<?php



	class SettingsController
	{
		//вход
		public function actionLogin()
		{
				
			if (user::checkLogged()) {
				header("Location: /settings/new");
			}

			// Переменные для формы
	        $login = false;
	        $password = false;

	        // Обработка формы
	        if (isset($_POST['submit'])) {
	            // Если форма отправлена 
	            // Получаем данные из формы
	            $login = $_POST['login'];
	            $password = $_POST['password'];
	            // Флаг ошибок
	            $error=false;
	 
	            // Проверяем существует ли пользователь
	            $userId = user::checkUserData($login, $password);
	            if ($userId == false) {
	                // Если данные неправильные - показываем ошибку
	                $error = 'Неверный логин или пароль';
	            } else {
	                // Если данные правильные, запоминаем пользователя (сессия)
	                user::auth($userId);
	                // Перенаправляем пользователя в закрытую часть 
	                header("Location: /settings/new");

	            }
			}
			require_once(ROOT."/views/settings/index.php");

			return true;
			
		}

		//выход
		public function actionLogout()
		{
				
			user::logout();

			header("Location: /");
		}

		//добавление контента
		public function actionNew()
		{
			if (!user::checkLogged()) {
				header("Location: /settings");
			}
			
			require_once(ROOT."/views/settings/new.php");

			return true;
			
		}

		//добавление фильма
		public function actionNewFilm()
		{
			if (!user::checkLogged()) {
				header("Location: /settings");
			}
	
			// Переменные для формы
	        $filmName = false;
	        $year = false;
	        $country = false;
	        $description = false;
	        $poster = false;
	        $video = false;
	       
	        // Обработка формы
	        if (isset($_POST['submit'])) {
	            // Если форма отправлена 
	            // Получаем данные из формы
	        	$filmName = $_POST['filmName'];
		        $year = $_POST['year'];
		        $country = $_POST['country'];
		        $poster = $_POST['poster'];
		        $description = $_POST['description'];
		        $video = $_POST['video'];

	            // Флаг ошибок
	            $error=false;
	 
	            // Проверяем заполнена ли форма
	            

	            if (strlen($_POST['filmName'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };
	            if (strlen($_POST['year'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };
	            if (strlen($_POST['country'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };
	            if (strlen($_POST['poster'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };
	            if (strlen($_POST['description'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };
	            if (strlen($_POST['video'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };

	            if (!$error){
	            	// Если данные правильные, добавляем фильм
	                films::addFilm($filmName,$year,$country,$poster,$description,$video);

	                // Перенаправляем пользователя
	                header("Location: /films");
	            }    
	            
			}
			
			require_once(ROOT."/views/films/new_film.php");

			return true;
			
		}

		//Добавление сериала
		public function actionNewSerial()
		{
			if (!user::checkLogged()) {
				header("Location: /settings");
			}
	
			// Переменные для формы
	        $serialName = false;
	        $year = false;
	        $country = false;
	        $description = false;
	        $picture = false;
	        $video = false;
	       
	        // Обработка формы
	        if (isset($_POST['submit'])) {
	            // Если форма отправлена 
	            // Получаем данные из формы
	        	$serialName = $_POST['serialName'];
		        $year = $_POST['year'];
		        $country = $_POST['country'];
		        $picture = $_POST['picture'];
		        $description = $_POST['description'];
		        $video = $_POST['video'];

	            // Флаг ошибок
	            $error=false;
	 
	            // Проверяем заполнена ли форма
	            

	            if (strlen($_POST['serialName'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };
	            if (strlen($_POST['year'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };
	            if (strlen($_POST['country'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };
	            if (strlen($_POST['picture'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };
	            if (strlen($_POST['description'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };
	            if (strlen($_POST['video'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };

	            if (!$error){
	            	// Если данные правильные, добавляем фильм
	                tvSerials::addSerial($serialName,$year,$country,$picture,$description,$video);

	                // Перенаправляем пользователя
	                header("Location: /serials");
	            }    
	            
			}
			
			require_once(ROOT."/views/tvSerials/new_serial.php");

			return true;
			
		}

		//Изменение фильма
		public function actionEditFilm($filmId)
		{
			if (!user::checkLogged()) {
				header("Location: /settings");
			}
			
			$film=films::getFilmById($filmId);

			// Переменные для формы
	        $filmName = $film['filmName'];
	        $year = $film['year'];
	        $country = $film['country'];
	        $description = $film['description'];
	        $poster = $film['poster'];
	        $video = $film['video'];
	       
	        // Обработка формы
	        if (isset($_POST['submit'])) {
	            // Если форма отправлена 
	            // Получаем данные из формы
	        	$filmName = $_POST['filmName'];
		        $year = $_POST['year'];
		        $country = $_POST['country'];
		        $poster = $_POST['poster'];
		        $description = $_POST['description'];
		        $video = $_POST['video'];

	            // Флаг ошибок
	            $error=false;
	 
	            // Проверяем заполнена ли форма
	            

	            if (strlen($_POST['filmName'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };
	            if (strlen($_POST['year'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };
	            if (strlen($_POST['country'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };
	            if (strlen($_POST['poster'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };
	            if (strlen($_POST['description'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };
	            if (strlen($_POST['video'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };

	            if (!$error){
	            	// Если данные правильные, добавляем фильм
	                films::editFilm($filmName,$year,$country,$poster,$description,$video,$filmId);

	                // Перенаправляем пользователя
	                header("Location: /film/".$filmId);
	            }    
	            
			}
			
			require_once(ROOT."/views/films/edit_film.php");

			return true;
			
		}

		//Изменение сериала
		public function actionEditSerial($serialId)
		{
			if (!user::checkLogged()) {
				header("Location: /settings");
			}
			
			$serial=tvSerials::getTvSerialById($serialId);

			// Переменные для формы
	        $serialName = $serial['tvSerialName'];
	        $year = $serial['year'];
	        $country = $serial['country'];
	        $description = $serial['description'];
	        $picture = $serial['picture'];
	        $video = $serial['video'];
	       
	        // Обработка формы
	        if (isset($_POST['submit'])) {
	            // Если форма отправлена 
	            // Получаем данные из формы
	        	$serialName = $_POST['tvSerialName'];
		        $year = $_POST['year'];
		        $country = $_POST['country'];
		        $picture = $_POST['picture'];
		        $description = $_POST['description'];
		        $video = $_POST['video'];

	            // Флаг ошибок
	            $error=false;
	 
	            // Проверяем заполнена ли форма
	            

	            if (strlen($_POST['tvSerialName'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };
	            if (strlen($_POST['year'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };
	            if (strlen($_POST['country'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };
	            if (strlen($_POST['picture'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };
	            if (strlen($_POST['description'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };
	            if (strlen($_POST['video'])==0) {
	                // Если данные неправильные - показываем ошибку
	                $error = true;
	            };

	            if (!$error){
	            	// Если данные правильные, добавляем фильм
	                tvSerials::editSerial($serialName,$year,$country,$picture,$description,$video,$serialId);

	                // Перенаправляем пользователя
	                header("Location: /serial/".$serialId);
	            }    
	            
			}
			
			require_once(ROOT."/views/tvSerials/edit_serial.php");

			return true;
			
		}

		//Удалить фильм
		public function actionDeleteFilm($filmId)
		{
			if (!user::checkLogged()) {
				header("Location: /settings");
			}
			
			films::deleteFilmById($filmId);
			
	        header("Location: /");
		}
		//Удалить сериал
		public function actionDeleteSerial($serialId)
		{
			if (!user::checkLogged()) {
				header("Location: /settings");
			}
			
			tvSerials::deleteSerialById($serialId);
			
	        header("Location: /serials");
		}

		
	}
