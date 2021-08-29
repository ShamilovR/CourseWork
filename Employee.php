<html>
	<head>
		<title> Сотрудник </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="utf-8">
	</head>
	<body>
		
		<div id = "container">
			<div id = "header">
				Меню сотрудника
			</div>
			<div id = "sidebar">
				<br>
				<br>
				<a href="SearchCar.php" id="searchCar"><span>Найти автомобиль</span></a>
				<br>
				<br>
				<a href="AddCar.php" id="addCar"><span>Добавить автомобиль</span></a>
				<br>
				<br>
				<a href="DelCar.php" id="deleteCar"><span>Удалить автомобиль</span></a>
				<br>
				<br>
				<a href="EditCar.php" id="editCar"><span>Редактировать информацию автомобиля</span></a>
				<br>
				<br>
				<a href="AddClient.php" id="depClient"><span>Занести клиента в БД</span></a>
				<br>
				<br>
				<a href="AddContract.php" id="formAgr"><span>Сформировать договор</span></a>
				<br>
				<br>
				<a href="Main.php" id="back"><span>Назад</span></a>
			</div>
			
			<div id = "content">
				<table width = "73%" style="color:#30D5C8" border="2">
					<tr>
						<th>ID</th>
						<th>Марка</th>
						<th>Модель</th>
						<th>Год выпуска</th>
						<th>Цена</th>
						<th>Цвет</th>
						<th>Мощность</th>
					</tr>
					<?php
						$link = mysqli_connect("localhost", "root", "", "paps_db") or die("Ошибка " . mysqli_error($link)); 
						mysqli_query($link, 'SET NAMES utf8');
						$query ="SELECT * FROM cars";
						 
						$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
						if($result)
						{
							$rows = mysqli_num_rows($result); // количество полученных строк
							 
							for ($i = 0 ; $i < $rows ; ++$i)
							{
								$row = mysqli_fetch_row($result);
								echo "<tr>";
									for ($j = 0 ; $j < 7 ; ++$j) echo "<td>$row[$j]</td>";
								echo "</tr>";
							}
							echo "</table>";
							 
							// очищаем результат
							mysqli_free_result($result);
						}
						 
						mysqli_close($link);
					?>
			
			</div>
			<div id="clear"> </div>
			
			<script type="text/javascript" language="Javascript">
				
			</script>
		</div>
	</body>
</html>
