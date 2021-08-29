<?php
	$id = $_POST['id']; 
	$name = $_POST['name']; 
	$surname = $_POST['surname'];
	$patr = $_POST['patr'];
	$pos = $_POST['pos'];
	$dob = $_POST['dob'];
	$doc_num = $_POST['doc_num'];
	$link = mysqli_connect("localhost", "root", "", "paps_db") or die("Ошибка " . mysqli_error($link)); 
	mysqli_query($link, 'SET NAMES utf8');
	$sql = "UPDATE employee SET name = '$name', surname = '$surname', patronymic = '$patr',
										position = '$pos', date_of_birth = '$dob', doc_num = '$doc_num' WHERE id = '$id'";
	$link->query($sql);
	$link->close();
?>