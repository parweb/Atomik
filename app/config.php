<?php

Atomik::set(array(
	'app/layout' => '_layout',
	'styles' => array('main')
));

Atomik::set('plugins', array(
	'Db' => array(
		'dsn' 		=> 'mysql:host=localhost;dbname=atomik',
		'username' 	=> 'root',
		'password' 	=> 'root'
	),
	'Cache',
	'Ajax'
));