<?php
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);//inputing post to the user
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING); // grabing from title



	echo "<p>Title: $title</p>";//echoing out the title
	echo "<p>Post: $post</p>";//echoing out the post