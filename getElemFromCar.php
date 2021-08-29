<?php
	$mark = $_POST['mark']; 
	$model = $_POST['model'];
	$doi = $_POST['doi'];
	$price = $_POST['price'];
	$col = $_POST['col'];
	$pow = $_POST['pow'];
	$link = mysqli_connect("localhost", "root", "", "paps_db") or die("Ошибка " . mysqli_error($link)); 
	mysqli_query($link, 'SET NAMES utf8');
	$sql = "INSERT INTO cars (mark, model, date_of_issue, price, colour, power) 
							VALUES ('$mark', '$model', '$doi', '$price', '$col', '$pow')";
	$link->query($sql);
	$link->close();
?>