<html>
	<head>
		<title> Меню директора </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<div id = "container">
			<div id = "header">
				Удаление сотрудника
			</div>
			<div id = "sidebar">
				<br>
				<br>
				<a href="Director.php" id="addEmpl" onclick = "getElem()"><span>Удалить</span></a>
				<br>
				<br>
				<a href="Director.php" id="back"><span>Назад</span></a>
			</div>
			<div id = "content">
				<form method = "post">
					<label for = "EmplID">Введите id сотрудника: </label><input type = "text" id = "emplID" placeholder = "id" required><Br>
				</form>
				
			</div>
			<div id="clear"> </div>
			
			<script type="text/javascript" language="Javascript">
					function getElem(){
						var id = document.getElementById("emplID").value;
						
						let data = {
							'id': id
						};
						let response = $.ajax({
							type: 'POST',
							async: false,
							url: 'getIdFromEmpl.php', 
							data: data
						}).responseText;
					}
			</script>
		</div>
	</body>
</html>
