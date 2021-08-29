<?php
	$name = $_POST['name']; 
	$surname = $_POST['surname'];
	$patr = $_POST['patr'];
	$dob = $_POST['dob'];
	$doc_num = $_POST['doc_num'];
	$link = mysqli_connect("localhost", "root", "", "paps_db") or die("Ошибка " . mysqli_error($link)); 
	mysqli_query($link, 'SET NAMES utf8');
	$sql = "INSERT INTO clients (name, surname, patronymic, date_of_birth, doc_num) 
							VALUES ('$name', '$surname', '$patr', '$dob', '$doc_num')";
	$link->query($sql);
	$link->close();
?>