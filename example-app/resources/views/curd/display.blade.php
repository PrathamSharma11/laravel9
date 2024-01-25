<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>display</title>
</head>
<body>
<div class = "container">
<table class="table table-bordered text-center">
		<tr>
			<th colspan="4">Data Display</th>
		</tr>
		<tr>
			<th>Id</th>
			<th>Username</th>
			<th>Password</th>
			<th>Action</th>
		</tr>
        @foreach($data as $d)
        <tr>
			<td>{{$d->id}}</td>
			<td>{{$d->username}}</td>
			<td>{{$d->password}}</td>
			<td>
				<a href="{{url('/curd/view/'.$d->id)}}" class="btn btn-info">View</a>
				<a href="{{url('curd/edit/'.$d->id)}}"class="btn btn-warning">Edit</a>
				<a href="{{url('curd/delete/'.$d->id)}}" class="btn btn-danger">Delete</a>
			</td>
		</tr>
        @endforeach
</table>

</div>
</body>
</html>
