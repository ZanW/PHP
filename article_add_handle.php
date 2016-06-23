<?php

	requre_once('connect.php');
	
	// populate information into database
	
	// print_r($_POST): check what user input through web page
	// check before populating information made by user in to database
	
	if((isset($_POST['title']&&(!empty($_POST['title']))))) {
		echo "'<script>alert('title cannot be empty'); window.location.href = 'article.add.php';</script>";
	}
	
	
	$title = $_POST['title'];
	$author = $POST['author'];
	$description = $POST['description'];
	$content = $_POST['content'];
	$dateline = time();
	
	$insertsql = "insert into article(title, author, description, content, dateline) values
	('$title','$author','$description','$content','$dateline')";
	
	// echo $insertsql: check whether above mysql commond is correct
	
	if (!mysql_query('$insertsql')) {
		echo "<script>alert('post succeeded'); window.location.href = 'article.add.php';</script>";
	} else {
		echo "<script>alert('post failed'); window.location.href = 'artical.add.php';</script>";
	}
?>