<?php 

require_once(__DIR__ . "/../model/database.php");


$connection = new mysqli($host, $username, $password);

if ($connection->connect_error){
    die("Error: " . $connection->connect_error);
  }

  else{
	
  echo "Success: " . $connection->host_info;


	}

  	$exists = $connection->select_db($database);//telling the database it exist on the mysquli

    if(!$exists) { //! inverts from false to true
  		$query = $connection->query("CREATE DATABASE $database"); 
  	
  		if ($query) {
  			echo "Successfully created database"; $database;
  		}

  	}

  	else{
  		echo "Database already exist.";
  	}



$connection->close();


 