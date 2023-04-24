<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<div>
		<table border="5px">
			<tr>
				<th>id</th>
				<th>name of student</th>
				<th>surname of student</th>
				<th>edit_demo</th>
				<th>del_demo</th>
			</tr>
			
			@foreach($posts as $post)
			<tr>
				<td>{{$post->id}}</td>
				<td>{{$post->name}}</td>
				<td>{{$post->surname}}</td>
				<td><button><a href="/edit/{{$post->id}}">edit_demo</a></button></td>
				<td><button><a href="/delete/{{$post->id}}">del_demo</a></button></td>
			</tr>
			@endforeach
		</table>
	</div>
</body>

</html>