<?php
	$emplID = $_POST['EmplID']; 
	$clientID = $_POST['ClientID'];
	$carID = $_POST['CarID'];
	$agrDate = $_POST['agrDate'];
	$price = $_POST['price'];
	$link = mysqli_connect("localhost", "root", "", "paps_db") or die("Ошибка " . mysqli_error($link)); 
	mysqli_query($link, 'SET NAMES utf8');
	$sql = "INSERT INTO contract (EmplID, ClientID, CarID, agrDate, carPrice) 
							VALUES ('$emplID', '$clientID', '$carID', '$agrDate', '$price')";
	$link->query($sql);
	$link->close();
?>