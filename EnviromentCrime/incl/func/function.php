<?php
//
// Connect to the database
//

function ConnectDBA()
{
	$db = new PDO("sqlite:blocket.sqlite");

	// Display errors, but continue
	$db->setAttribute(PDO::ATTR_ERRMODE,
					  PDO::ERRMODE_WARNING);
}				  
?>