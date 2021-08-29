<html>
	<head>
		<title> Меню поиска </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<div id = "container">
			<div id = "header">
				 Поиск автомобиля по цене
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
					<label for = "price1">Введите начальную стоимость: </label><input type = "text" id = "price1" placeholder = "От" required>
					<br>
					<br>
					<label for = "price2">Введите конечную стоимость: </label><input type = "text" id = "price2" placeholder = "До" required>
				</form>
				
			</div>
			<div id="clear"> </div>
			
			<script type="text/javascript" language="Javascript">
					function getElem(){
						var price1 = document.getElementById("price1").value;
						var price2 = document.getElementById("price2").value;
						location.href = 'searchCarByPrice.php?price1='+price1+'&price2='+price2;
					}
			</script>
		</div>
	</body>
</html>
