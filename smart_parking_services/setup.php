<!DOCTYPE html>
<html>
	<head>
		<title>Setting up database</title>
	</head>
 <body>
	<h3>Setting up...</h3>
	<?php
	require_once 'functions.php';
	
	
	createTable('Place',
	'id INT NOT NULL AUTO_INCREMENT,
	 longi double,
	 land double,
	 PRIMARY KEY(id)'
	 );
	createTable('Park',
	'UID INT ,
	 ID INT,
	 taken INT,
	 time_taken INT,
	 current_time INT,
	 PRIMARY KEY(UID,ID)',
	 FOREIGN KEY (ID) REFERENCES Place(ID)
	 );	
	 createTable('User',
	'name VARCHAR ,
	 surname VARCHAR,
	 carNum VARCHAR,
	 rfid INT,
	 PRIMARY KEY(carNum)'
	 );
	?>
 <br>...done.
 </body>
</html>