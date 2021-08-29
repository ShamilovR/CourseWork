<?php
	$id = $_POST['id'];
	$mark = $_POST['mark']; 
	$model = $_POST['model'];
	$doi = $_POST['doi'];
	$price = $_POST['price'];
	$col = $_POST['col'];
	$pow = $_POST['pow'];
	$link = mysqli_connect("localhost", "root", "", "paps_db") or die("Ошибка " . mysqli_error($link)); 
	mysqli_query($link, 'SET NAMES utf8');
	$sql = "UPDATE cars SET mark = '$mark', model = '$model', date_of_issue = '$doi',
										price = '$price', colour = '$col', power = '$pow' WHERE id = '$id'";
	$link->query($sql);
	$link->close();
?>