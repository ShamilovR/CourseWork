<html>
	<head>
		<title> Меню директора </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset = "UTF-8">
	</head>
	<body>
		<div id = "container">
			<div id = "header">
				Результаты поиска
			</div>
			<div id = "sidebar">
				<br>
				<br>
				<a href="Director.php" id="back"><span>Назад</span></a>
			</div>
			<div id = "content">
				<table width = "73%" style="color:#30D5C8" border="2">
					<tr>
						<th>ID</th>
						<th>Имя</th>
						<th>Фамилия</th>
						<th>Отчество</th>
						<th>Должность</th>
						<th>Дата рождения</th>
						<th>Номер паспорта</th>
					</tr>
					<?php
						$surname = $_GET['surname'];
						$link = mysqli_connect("localhost", "root", "", "paps_db") or die("Ошибка " . mysqli_error($link)); 
						mysqli_query($link, 'SET NAMES utf8');
						$query = "SELECT * FROM employee WHERE surname = '$surname'";
						 
						$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
						if($result)
						{
							$rows = mysqli_num_rows($result); 
							 
							for ($i = 0 ; $i < $rows ; ++$i)
							{
								$row = mysqli_fetch_row($result);
								echo "<tr>";
									for ($j = 0 ; $j < 7 ; ++$j) echo "<td>$row[$j]</td>";
								echo "</tr>";
							}
							echo "</table>";
							
							mysqli_free_result($result);
						}
						 
						mysqli_close($link);
					?>
			</div>
			<div id="clear"> </div>
		</div>
	</body>
</html>
