<?php


	class FilmController
	{
		public function actionIndex()
		{
				
				$filmList=films::getAllFilms();

				require_once(ROOT."/views/films/index.php");

				return true;
			
		}

		public function actionView($filmId)
		{
				
				$film=films::getFilmById($filmId);

				require_once(ROOT."/views/films/film.php");

				return true;

		}

		
	}
