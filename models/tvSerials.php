<?php

	class tvSerials
	{
		const SHOW_BY_DEFAULT_IN_PAGE = 12;

		public static function getAllTvSerials()
		{
			$db=Db::getConnection();
	
			$tvSerialsList=array();

			$result=$db->query('SELECT * '
				.'FROM tvSerials '
				.'ORDER BY tvSerialid DESC ;');
		
			$i=0;

			while($row = $result->fetch()){
				$tvSerialsList[$i]['tvSerialId']=$row['tvSerialId'];
				$tvSerialsList[$i]['tvSerialName']=$row['tvSerialName'];
				$tvSerialsList[$i]['categoryId']=$row['categoryId'];
				$tvSerialsList[$i]['year']=$row['year'];
				$tvSerialsList[$i]['country']=$row['country'];
				$tvSerialsList[$i]['description']=$row['description'];
				$tvSerialsList[$i]['picture']=$row['picture'];
				$tvSerialsList[$i]['video']=$row['video'];
				$i++;
			}
			return $tvSerialsList;
		}

		public static function getTvSerialById($TvSerialId)
		{
	
			$TvSerialId=intval($TvSerialId);

			$db=Db::getConnection();
	

			$result=$db->query("SELECT * "
				."FROM tvSerials "
				."WHERE tvSerialId='$TvSerialId' "
			);

			$result->setFetchMode(PDO::FETCH_ASSOC);
		
			return $result->fetch();
		}

		//Добавить сериал
		public static function addSerial($serialName,$year,$country,$picture,$description,$video)
		{
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $db->query("INSERT INTO tvSerials(tvSerialName,year,country,picture,description,video) VALUES('".$serialName."','".$year."','".$country."','".$picture."','".$description."','".$video."');");
 
        return true;
    	}

    	//изменить сериал
    	public static function editSerial($tvSerialName,$year,$country,$picture,$description,$video,$tvSerialId)
		{
	        $db=Db::getConnection();

			$sql="UPDATE tvSerials SET "
			."tvSerialName = :tvSerialName, "
			."year = :year, "
			."country = :country, "
			."picture = :picture, "
			."description = :description, "
			."video = :video "
			."WHERE tvSerialId = :tvSerialId";

			$result=$db->prepare($sql);
			$result->bindParam(':tvSerialName',$tvSerialName,PDO::PARAM_STR);
			$result->bindParam(':country',$country,PDO::PARAM_INT);
			$result->bindParam(':picture',$picture,PDO::PARAM_INT);
			$result->bindParam(':description',$description,PDO::PARAM_INT);
			$result->bindParam(':video',$video,PDO::PARAM_INT);
			$result->bindParam(':year',$year,PDO::PARAM_INT);
			$result->bindParam(':tvSerialId',$tvSerialId,PDO::PARAM_INT);
			$result->execute();

			return true;
    	}

    	public static function deleteSerialById($serialId)
		{
	        $db=Db::getConnection();

			$sql="DELETE FROM tvSerials WHERE tvSerialId = :serialId;";

			$result=$db->prepare($sql);
			$result->bindParam(':serialId',$serialId,PDO::PARAM_INT);
			$result->execute();

			return true;
    	}

		

	}


?>