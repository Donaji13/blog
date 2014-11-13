<?php 

require_once(__DIR__ . "/../model/database.php");


$connection = new mysqli($host, $username, $password);

if ($connection->connect_error){
    die("<p>Error: " . $connection->connect_error . "</p>");
  }

  else{
	
  echo "Success: " . $connection->host_info;


	}

  	$exists = $connection->select_db($database);//telling the database it exist on the mysquli

    if(!$exists) { //! inverts from false to true
  		$query = $connection->query("CREATE DATABASE $database"); 
  	
  		if ($query) {
  			echo "<p>Successfully created database"; $database . "</p>";
  		}

  	}

  	else{
  		echo "<p>Database already exist.</p>";
  	}

$query = $connection->query("CREATE TABLE posts ("
	     . "id int(11) NOT NULL AUTO_INCREMENT," //creating id called 11
	     . "title varchar(255) NOT NULL," 
	     . "post text NOT NULL," //creating a new post
	     . "PRIMARY KEY (id))"); // setting this as primary key 
// created a query
if($query){
	echo "<p>Successfully created  table: posts</p>";
}
else {
	echo "<p>$connection->error</p>";
}



$connection->close();


 