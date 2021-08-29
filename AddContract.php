<html>
	<head>
		<title> Меню сотрудника </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<div id = "container">
			<div id = "header">
				Добавление договора
			</div>
			<div id = "sidebar">
				<p><label for = "EmplID">Введите id сотрудника: </label><Br>
				<input type = "text" id = "EmplID" placeholder = "id сотрудника" required><Br>
					<br>
					<label for = "ClientID">Введите id клиента: </label><Br>
					<input type = "text" id = "ClientID" placeholder = "id клиента" required><Br>
					<br>
					<label for = "CarID">Введите id автомобиля: </label><Br>
					<input type = "text" id = "CarID" placeholder = "id автомобиля" required><Br>
					<br>
					<label for = "agrDate">Введите дату сотставления договора: </label><Br>
					<input type = "text" size = "22" id = "agrDate" placeholder = "Дата договора(ГГГГ-ММ-ДД)" required><Br>
					<br>
					<label for = "price">Введите стоимость автомобиля: </label><Br>
					<input type = "text" id = "price" placeholder = "Стоимость" required></p>
				<br>
				<br>
				<a href="" id="addContr" onclick = "getElem()"><span>Добавить</span></a>
				<br>
				<br>
				<a href="Employee.php" id="back"><span>Назад</span></a>
			</div>
			<div id = "content">
				<form method = "post">
					<table width = "73%" style="color:#30D5C8" border="2">
					<tr>
						<th>ID</th>
						<th>id сотрудника</th>
						<th>id клиента</th>
						<th>id автомобиля</th>
						<th>Дата договора</th>
						<th>Цена автомобиля</th>
					</tr>
					<?php
						$link = mysqli_connect("localhost", "root", "", "paps_db") or die("Ошибка " . mysqli_error($link)); 
						mysqli_query($link, 'SET NAMES utf8');
						$query ="SELECT * FROM contract";
						 
						$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
						if($result)
						{
							$rows = mysqli_num_rows($result); 
							 
							for ($i = 0 ; $i < $rows ; ++$i)
							{
								$row = mysqli_fetch_row($result);
								echo "<tr>";
									for ($j = 0 ; $j < 6 ; ++$j) echo "<td>$row[$j]</td>";
								echo "</tr>";
							}
							echo "</table>";
							 
							mysqli_free_result($result);
						}
						 
						mysqli_close($link);
					?>
				</form>
			</div>
			<div id="clear"> </div>
			
			<script type="text/javascript" language="Javascript">				
				function getElem(){
					var count = 0;
					var reg = /[0-2]\d{3}[-][0-1]\d[-][0-3]\d/;
					var EmplID = document.getElementById("EmplID").value;
					var ClientID = document.getElementById("ClientID").value;
					var CarID = document.getElementById("CarID").value;
					var agrDate = document.getElementById("agrDate").value;
					var price = document.getElementById("price").value;
					
					if(!isNaN(EmplID)){
						EmplID = Number(EmplID);
						if(!Number.isInteger(EmplID))
							alert("id сотрудника - целое число!");
						else count++;
					}
					else alert("Ошибка! id сотрудника должно быть целым числом");
					if(!isNaN(ClientID)){
						ClientID = Number(ClientID);
						if(!Number.isInteger(ClientID))
							alert("id клиента - целое число!");
						else count++;
					}
					else alert("Ошибка! id клиента должно быть целым числом");
					if(!isNaN(CarID)){
						CarID = Number(CarID);
						if(!Number.isInteger(CarID))
							alert("id автомобиля - целое число!");
						else count++;
					}
					else alert("Ошибка! id автомобиля должно быть целым числом");
					if(!isNaN(price)){
						price = Number(price);
						if(!Number.isInteger(price))
							alert("Стоимость автомобиля - целое число!");
						else count++;
					}
					else alert("Ошибка! Стоимость автомобиля должен быть целым числом");
					if (agrDate.search(reg) == -1)
						alert ("Ошибка! Неверный ввод даты");
					else count++;
					
					if (count == 5){
						let data = {
							'EmplID': EmplID,
							'ClientID': ClientID,
							'CarID': CarID, 
							'agrDate': agrDate,
							'price': price
						};
						let response = $.ajax({
							type: 'POST',
							async: false,
							url: 'getElemFromAgr.php', 
							data: data
						}).responseText;
					}					
				}			
			</script>
		</div>
	</body>
</html>
