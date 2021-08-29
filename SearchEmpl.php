<html>
	<head>
		<title> Меню директора </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<div id = "container">
			<div id = "header">
				Поиск информации о сотруднике
			</div>
			<div id = "sidebar">
				<br>
				<br>
				<label for = "surname">Введите фамилию сотрудника: </label>
				<br>
				<br>
				<input type = "text" id = "surname" placeholder = "Фамилия" required>
				<br>
				<br>
				<a id="searchEmpl" onclick = "getElem()"><span>Поиск</span></a>
				<br>
				<br>
				<a href="Director.php" id="back"><span>Назад</span></a>
			</div>
			<div id = "content">

			</div>
			<div id="clear"> </div>
		</div>
		<script type="text/javascript" language="Javascript">
			function getElem(){
				var surname = document.getElementById("surname").value;
				location.href = 'searchElemFromEmpl.php?surname='+surname;
			}
		</script>
	</body>
</html>
