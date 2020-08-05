<?php
	/*
		Following are example of how this will work:
		page.php?id=1   about page
		page.php?ud=2 contact page 
		page.php?id=3 service page ...

	*/
	if(!empty($_GET['id'])){
		$id = $_GET['id'];
	}
	//Following is just an example... You need to work on it to make it perfect
	$conn = mysqli_connect('localhost','db_user','db_pass','db_name');
	$sql = "SELECT * FROM pages WHERE id =".$id;

	$res = mysqli_query($sql);
	$page = mysqli_fetch($res);

	echo '<pre>';
	print_r($page);