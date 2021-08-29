<html>
	<head>
		<title> Меню поиска </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<div id = "container">
			<div id = "header">
				 Поиск автомобиля по марке
			</div>
			<div id = "sidebar">
				<br>
				<br>
				<a onclick = "getElem()"><span>Найти</span></a>
				<br>
				<br>
				<a href="SearchCar.php" id="back"><span>Назад</span></a>
			</div>
			<div id = "content">
				<form method = "post">
					<label for = "mark">Введите марку автомобиля: </label><input type = "text" id = "mark" placeholder = "Марка автомобиля" required>
				</form>
				
			</div>
			<div id="clear"> </div>
			
			<script type="text/javascript" language="Javascript">
					function getElem(){
						var mark = document.getElementById("mark").value;
						location.href = 'searchCarByMark.php?mark='+mark;
					}
			</script>
		</div>
	</body>
</html>
