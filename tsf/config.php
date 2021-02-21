<?php

	$conn = mysqli_connect('sql102.epizy.com','
ua5u29NtXH','epiz_27985111','epiz_27985111_bank');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
