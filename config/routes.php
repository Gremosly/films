<?php

return array(

	'delete_film/([0-9]+)' => 'settings/deleteFilm/$1',

	'delete_serial/([0-9]+)' => 'settings/deleteSerial/$1',

	'settings/edit_serial/([0-9]+)' => 'settings/editSerial/$1',

	'settings/edit_film/([0-9]+)' => 'settings/editFilm/$1',

	'settings/new_serial' => 'settings/newSerial',

	'settings/new_film' => 'settings/newFilm',

	'settings/new' => 'settings/new',

	'logout' => 'settings/logout',

	'settings' => 'settings/login',	

	'serial/([0-9]+)' => 'tv/view/$1',			

	'serials' => 'tv/index',				// actionIndex в TvController

	'film/([0-9]+)' => 'film/view/$1',				

	'films' => 'film/index',				// actionIndex в FilmController
);


