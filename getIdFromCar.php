<?php
	$id = $_POST['id']; 
	$link = mysqli_connect("localhost", "root", "", "paps_db") or die("Ошибка " . mysqli_error($link)); 
	mysqli_query($link, 'SET NAMES utf8');
	$sql = "DELETE FROM cars WHERE id = '$id'";
	$link->query($sql);
	$link->close();
?>