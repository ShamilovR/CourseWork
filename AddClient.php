<html>
	<head>
		<title> Меню сотрудника </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<div id = "container">
			<div id = "header">
				Добавление клиента
			</div>
			<div id = "sidebar">
				<p><label for = "name">Введите имя клиента: </label><Br>
				<input type = "text" id = "name" placeholder = "Имя" required><Br>
					<br>
					<label for = "surname">Введите фамилию клиента: </label><Br>
					<input type = "text" id = "surname" placeholder = "Фамилия" required><Br>
					<br>
					<label for = "patr">Введите отчество клиента: </label><Br>
					<input type = "text" id = "patr" placeholder = "Отчество" required><Br>
					<br>
					<label for = "dob">Введите дату рождения клиента: </label><Br>
					<input type = "text" size = "22" id = "dob" placeholder = "Дата рождения(ГГГГ-ММ-ДД)" required><Br>
					<br>
					<label for = "doc_num">Введите номер паспорта клиента: </label><Br>
					<input type = "text" id = "doc_num" placeholder = "Номер паспорта" required></p>
				<br>
				<br>
				<a href="" id="addClient" onclick = "getElem()"><span>Добавить</span></a>
				<br>
				<br>
				<a href="Employee.php" id="back"><span>Назад</span></a>
			</div>
			<div id = "content">
				<form method = "post">
					<table width = "73%" style="color:#30D5C8" border="2">
					<tr>
						<th>ID</th>
						<th>Имя</th>
						<th>Фамилия</th>
						<th>Отчество</th>
						<th>Дата рождения</th>
						<th>Номер документа</th>
					</tr>
					<?php
						$link = mysqli_connect("localhost", "root", "", "paps_db") or die("Ошибка " . mysqli_error($link)); 
						mysqli_query($link, 'SET NAMES utf8');
						$query ="SELECT * FROM clients";
						 
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
					var name = document.getElementById("name").value;
					var surname = document.getElementById("surname").value;
					var patr = document.getElementById("patr").value;
					var dob = document.getElementById("dob").value;
					var doc_num = document.getElementById("doc_num").value;
					
					if(name == "") alert("Поле имени не должно быть пустым!");
					else count++;
					if(surname == "") alert("Поле фамилии не должно быть пустым!");
					else count++;
					if(patr == "") alert("Поле отчества не должно быть пустым!");
					else count++;
					if(!isNaN(doc_num)){
						doc_num = Number(doc_num);
						if(!Number.isInteger(doc_num))
							alert("Номер документа - целое число!");
						else count++;
					}
					else alert("Ошибка! Номер документа должен быть целым числом");
					if (dob.search(reg) == -1)
						alert ("Ошибка! Неверный ввод даты");
					else count++;
					
					if (count == 5){
						let data = {
							'name': name,
							'surname': surname,
							'patr': patr, 
							'dob': dob,
							'doc_num': doc_num
						};
						let response = $.ajax({
							type: 'POST',
							async: false,
							url: 'getElemFromClient.php', 
							data: data
						}).responseText;
					}					
				}			
			</script>
		</div>
	</body>
</html>
