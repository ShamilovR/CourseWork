<html>
	<head>
		<title> Меню сотрудника </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<div id = "container">
			<div id = "header">
				Удаление автомобиля
			</div>
			<div id = "sidebar">
				<br>
				<br>
				<a href="Employee.php" id="delCar" onclick = "getElem()"><span>Удалить</span></a>
				<br>
				<br>
				<a href="Employee.php" id="back"><span>Назад</span></a>
			</div>
			<div id = "content">
				<form method = "post">
					<label for = "carID">Введите id автомобиля: </label><input type = "text" id = "carID" placeholder = "id" required><Br>
				</form>
				
			</div>
			<div id="clear"> </div>
			
			<script type="text/javascript" language="Javascript">
					function getElem(){
						var id = document.getElementById("carID").value;
						
						let data = {
							'id': id
						};
						let response = $.ajax({
							type: 'POST',
							async: false,
							url: 'getIdFromCar.php', 
							data: data
						}).responseText;
					}
			</script>
		</div>
	</body>
</html>
