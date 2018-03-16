<?php

	class films
	{
		const SHOW_BY_DEFAULT_IN_PAGE = 12;

		public static function getAllFilms()
		{
			$db=Db::getConnection();
	
			$filmList=array();

			$result=$db->query('SELECT * '
				.'FROM films '
				.'ORDER BY filmid DESC ;');
		
			$i=0;

			while($row = $result->fetch()){
				$filmList[$i]['filmId']=$row['filmId'];
				$filmList[$i]['filmName']=$row['filmName'];
				$filmList[$i]['categoryId']=$row['categoryId'];
				$filmList[$i]['year']=$row['year'];
				$filmList[$i]['country']=$row['country'];
				$filmList[$i]['description']=$row['description'];
				$filmList[$i]['poster']=$row['poster'];
				$filmList[$i]['video']=$row['video'];
				$i++;
			}
			return $filmList;
		}

		public static function getFilmById($filmId)
		{
	
			$filmId=intval($filmId);

			$db=Db::getConnection();
	

			$result=$db->query("SELECT * "
				."FROM films "
				."WHERE filmId='$filmId' "
			);

			$result->setFetchMode(PDO::FETCH_ASSOC);
		
			return $result->fetch();
		}

		//добавить фильм
		public static function addFilm($filmName,$year,$country,$poster,$description,$video)
		{
	        // Соединение с БД
	        $db = Db::getConnection();

	        // Текст запроса к БД
	        $db->query("INSERT INTO films(filmName,year,country,poster,description,video) VALUES('".$filmName."','".$year."','".$country."','".$poster."','".$description."','".$video."');");
	 
	        return true;
    	}

    	//изменить фильм
    	public static function editFilm($filmName,$year,$country,$poster,$description,$video,$filmId)
		{
	        $db=Db::getConnection();

			$sql="UPDATE films SET "
			."filmName = :filmName, "
			."year = :year, "
			."country = :country, "
			."poster = :poster, "
			."description = :description, "
			."video = :video "
			."WHERE filmId = :filmId";

			$result=$db->prepare($sql);
			$result->bindParam(':filmName',$filmName,PDO::PARAM_STR);
			$result->bindParam(':country',$country,PDO::PARAM_INT);
			$result->bindParam(':poster',$poster,PDO::PARAM_INT);
			$result->bindParam(':description',$description,PDO::PARAM_INT);
			$result->bindParam(':video',$video,PDO::PARAM_INT);
			$result->bindParam(':year',$year,PDO::PARAM_INT);
			$result->bindParam(':filmId',$filmId,PDO::PARAM_INT);
			$result->execute();

			return true;
    	}

    	public static function deleteFilmById($filmId)
		{
	        $db=Db::getConnection();

			$sql="DELETE FROM films WHERE filmId = :filmId;";

			$result=$db->prepare($sql);
			$result->bindParam(':filmId',$filmId,PDO::PARAM_INT);
			$result->execute();

			return true;
    	}

    	
		

	}


?>