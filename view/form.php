<?php

	require_once(__DIR__ . "/../model/config.php"); //important to rech sertain files from path 

?>


<h1>Create Blog Post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php";?>">
	<div>
		<label for="title">Title: </label> <!-- creates a title for blog post -->
		<input type="text" name="title" /> 
	</div>

<div>
	<label for="post">post: </label> <!-- crwates a post from label -->
	<textarea name="post"></textarea>
</div>

<div>
	 <button type="submit">Submit</button> <!-- Added a button and ads a submit button -->
</div>

</form>