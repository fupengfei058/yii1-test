<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database

	'connectionString' => 'mysql:host=192.168.235.128;dbname=vote',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => 'root',
	'charset' => 'utf8',

);