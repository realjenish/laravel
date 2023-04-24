<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<div>
		<form method="POST" action="/update/{{$posts->id}}">
			@csrf
			<h1 class="text-center">Update Data</h1>
			<div class="mb-3">
				<label><b>Name :- </b></label>
				<input type="text" name="name" value={{$posts->name}}>
			</div>
			<div class="mb-3">
				<label><b>Surname :- </b></label>
				<input type="text" name="surname" value={{$posts->surname}}>
			</div>
			<input type="submit" name="update" value="update">
		</form>
	</div>
</body>

</html>