<?php
	$name = $_POST['name']; 
	$surname = $_POST['surname'];
	$patr = $_POST['patr'];
	$pos = $_POST['pos'];
	$dob = $_POST['dob'];
	$doc_num = $_POST['doc_num'];
	//print_r($_POST);
	$link = mysqli_connect("localhost", "root", "", "paps_db") or die("Ошибка " . mysqli_error($link)); 
	mysqli_query($link, 'SET NAMES utf8');
	$sql = "INSERT INTO employee (name, surname, patronymic, position, date_of_birth, doc_num) 
							VALUES ('$name', '$surname', '$patr', '$pos', '$dob', '$doc_num')";
	$link->query($sql);
	$link->close();
?>