<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<div>
		<form method="POST" action="/store">
			@csrf
			<h1>Add Data</h1>
			<div>
				<label><b>Name :- </b></label>
				<input type="text" name="name">
			</div>
			<div>
				<label><b>Surname :- </b></label>
				<input type="text" name="surname">
			</div>
			<input type="submit" name="insert" value="insert">
		</form>
	</div>
</body>

</html>