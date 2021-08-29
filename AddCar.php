<html>
	<head>
		<title> Меню сотрудника </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<div id = "container">
			<div id = "header">
				Добавление автомобиля
			</div>
			<div id = "sidebar">
				<br>
				<br>
				<a href="Employee.php" id="addCar" onclick = "getElem()"><span>Добавить</span></a>
				<br>
				<br>
				<a href="Employee.php" id="back"><span>Назад</span></a>
			</div>
			<div id = "content">
				<form name = "add" method = "post">
					<p><label for = "mark">Введите марку автомобиля: </label><input type = "text" id = "mark" placeholder = "Марка" required><Br>
					<br>
					<label for = "model">Введите модель автомобиля: </label><input type = "text" id = "model" placeholder = "Модель" required><Br>
					<br>
					<label for = "doi">Введите дату выпуска авто: </label><input type = "text" size = "22" id = "doi" placeholder = "Год выпуска(ГГГГ-ММ-ДД)" required><Br>
					<br>
					<label for = "price">Введите цену автомобиля: </label><input type = "text" id = "price" placeholder = "Цена" required><Br>
					<br>
					<label for = "col">Введите цвет автомобиля: </label><input type = "text" id = "col" placeholder = "Цвет" required><Br>
					<br>
					<label for = "pow">Введите мощность двигателя авто: </label><input type = "text" id = "pow" placeholder = "Мощность(л.с.)" required></p>
				</form>
			</div>
			<div id="clear"> </div>
			
			<script type="text/javascript" language="Javascript">				
				function getElem(){
					var count = 0;
					var reg = /[0-2]\d{3}[-][0-1]\d[-][0-3]\d/;
					var mark = document.getElementById("mark").value;
					var model = document.getElementById("model").value;
					var doi = document.getElementById("doi").value;
					var price = document.getElementById("price").value;
					var col = document.getElementById("col").value;
					var pow = document.getElementById("pow").value;
					
					if(mark == "") alert("Поле имени не должно быть пустым!");
					else count++;
					if(model == "") alert("Поле фамилии не должно быть пустым!");
					else count++;
					if(col == "") alert("Поле отчества не должно быть пустым!");
					else count++;

					if(!isNaN(price)){
						price = Number(price);
						if(!Number.isInteger(price))
							alert("Цена авто - целое число!");
						else count++;
					}
					else alert("Ошибка! Цена авто должна быть целым числом");
					if (doi.search(reg) == -1)
						alert ("Ошибка! Неверный ввод даты");
					else count++;
					if(!isNaN(pow)){
						pow = Number(pow);
						if(!Number.isInteger(pow))
							alert("Мощность двтгателя - целое число!");
						else count++;
					}
					else alert("Ошибка! Мощность двтгателя должна быть целым числом");
					
					
					if (count == 6){
						let data = {
							'mark': mark,
							'model': model,
							'doi': doi, 
							'price': price,
							'col': col,
							'pow': pow
						};
						let response = $.ajax({
							type: 'POST',
							async: false,
							url: 'getElemFromCar.php',
							data: data
						}).responseText;
					}			
				}				
			</script>
		</div>
	</body>
</html>
