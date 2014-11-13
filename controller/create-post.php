<?php

	require_once(__DIR__ . "/../model/database.php"); //requiring this file 

	$connection = new mysqli($host, $username, $password, $database); //telling the connection that these exist


	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);//inputing post to the user
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING); // grabing from title

	echo "<p>Title: $title</p>";//echoing out the title
	echo "<p>Post: $post</p>";//echoing out the post

	$query = $connection->query("INSERT INTO post SET title = '$title', post = '$post' "); //query in which every record 
	//which is returned from the post query gets fed into the INSERT query
	
	if ($query) {
		echo "<p>Succesfully inserted post: $title</p>"; //allowin this if to enter in crate post and echoing it out
	}
	else  { //seeing if there is an eror and echoing out the error
		echo "<p>$connection->error</p>"; //echoing out the error
	}


	$connection->close(); //closing the connection from mysquil