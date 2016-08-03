<?php
    // Link and select the Cab Online database
	require_once("settings.php");
	$link = mysqli_connect($host, $user, $pswd, $dbnm);
	
	$db_selected = mysqli_select_db($link, "kgk7052");
	
	$query = "SELECT BookingNum FROM cabsOnline";								// Checking for table if exists
	$result = mysqli_query($link, $query);
		
	if(empty($result)) 			// If table does not exist creating new table
	{
		$Create = "CREATE TABLE cabsOnline		
		(
		BookingNum INT NOT NULL,
		BookingDate DateTime NOT NULL,
		BookingStatus VARCHAR(50) NOT NULL,
		CustName VARCHAR(50) NOT NULL,
		CustPhone INT(15) NOT NULL,
		CustAddress VARCHAR(255) NOT NULL,
		BookingPickupDate DateTime NOT NULL,
		BookingDestination VARCHAR(255) NOT NULL,
		PRIMARY KEY(BookingNum)
		)";

	   If( mysqli_query($link,$Create))		//Checking if query runs correctly
				{
				echo "<p>Table created</p>";
				}
				else
				{
					echo('Invalid query: ' . mysqli_error($link));
				}
	}
?>
