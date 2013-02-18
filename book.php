<?php

	$genre = $_POST['genre'];
	$name = $_POST['name'];
	$phoneNumber = $_POST['phone'];
	$description = $_POST['description'];
	
	$format = "Name: %s\nPhone Number: %s\nGenre: %s\nDescription: %s\n";
	$message =  sprintf($format, $name, $phoneNumber, $genre, $description);

	mail("esoros@gmail.com", "BSR Mobile DJ reqiest" , $message );
	
	if(mail)
	{
		echo "true";
	}

?>