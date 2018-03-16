<?php



	class TvController
	{
		public function actionIndex()
		{
				
				$tvSerialsList=tvSerials::getAllTvSerials();

				require_once(ROOT."/views/tvSerials/index.php");

				return true;
			
		}

		public function actionView($serialId)
		{
				
				$serial=tvSerials::getTvSerialById($serialId);

				require_once(ROOT."/views/tvSerials/serial.php");

				return true;
			
		}

		
	}
