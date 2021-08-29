<html>
	<head>
		<title> Меню директора </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<div id = "container">
			<div id = "header">
				Добавление сотрудника
			</div>
			<div id = "sidebar">
				<br>
				<br>
				<a href="Director.php" id="addEmpl" onclick = "getElem()"><span>Добавить</span></a>
				<br>
				<br>
				<a href="Director.php" id="back"><span>Назад</span></a>
			</div>
			<div id = "content">
				<form name = "add" method = "post">
					<p><label for = "name">Введите имя сотрудника: </label><input type = "text" id = "name" placeholder = "Имя" required><Br>
					<br>
					<label for = "surname">Введите фамилие сотрудника: </label><input type = "text" id = "surname" placeholder = "Фамилия" required><Br>
					<br>
					<label for = "patr">Введите отчество сотрудника: </label><input type = "text" id = "patr" placeholder = "Отчество" required><Br>
					<br>
					<label for = "pos">Введите должность сотрудника: </label><input type = "text" id = "pos" placeholder = "Должность" required><Br>
					<br>
					<label for = "dob">Введите дату рождения сотрудника: </label><input type = "text" size = "22" id = "dob" placeholder = "Дата рождения(ГГГГ-ММ-ДД)" required><Br>
					<br>
					<label for = "doc_num">Введите номер паспорта сотрудника: </label><input type = "text" id = "doc_num" placeholder = "Номер паспорта" required></p>
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
					var pos = document.getElementById("pos").value;
					var dob = document.getElementById("dob").value;
					var doc_num = document.getElementById("doc_num").value;
					
					if(name == "") alert("Поле имени не должно быть пустым!");
					else count++;
					if(surname == "") alert("Поле фамилии не должно быть пустым!");
					else count++;
					if(patr == "") alert("Поле отчества не должно быть пустым!");
					else count++;
					if(pos == "") alert("Поле должности не должно быть пустым!");
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
					
					if (count == 6){
						let data = {
							'name': name,
							'surname': surname,
							'patr': patr, 
							'pos': pos,
							'dob': dob,
							'doc_num': doc_num
						};
						let response = $.ajax({
							type: 'POST',
							async: false,
							url: 'getElemFromEmpl.php', // тут адрес сркипта
							data: data
						}).responseText;
					}					
				}				
			</script>
		</div>
	</body>
</html>
