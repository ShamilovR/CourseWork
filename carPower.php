<html>
	<head>
		<title> Меню поиска </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<div id = "container">
			<div id = "header">
				 Поиск автомобиля по мощности двигателя
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
					<label for = "pow1">Введите начальную мощность: </label><input type = "text" id = "pow1" placeholder = "От" required>
					<br>
					<br>
					<label for = "pow2">Введите конечную мощность: </label><input type = "text" id = "pow2" placeholder = "До" required>
				</form>
				
			</div>
			<div id="clear"> </div>
			
			<script type="text/javascript" language="Javascript">
					function getElem(){
						var pow1 = document.getElementById("pow1").value;
						var pow2 = document.getElementById("pow2").value;
						location.href = 'searchCarByPower.php?pow1='+pow1+'&pow2='+pow2;
					}
			</script>
		</div>
	</body>
</html>
