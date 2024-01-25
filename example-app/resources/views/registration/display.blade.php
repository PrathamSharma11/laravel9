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
			<th colspan="10" class="bg-danger" style="width:200%">Data Display</th>
		</tr>
		<tr>
			<th>Id</th>
			<th>name</th>
			<th>number</th>
            <th>email</th>
            <th>address</th>
            <th>qualification</th>
            <th>branch</th>
            <th>semester</th>
            <th>course</th>
			<th>Action</th>
		</tr>
        @foreach($data as $d)
        <tr>
			<td>{{$d->id}}</td>
			<td>{{$d->name}}</td>
			<td>{{$d->mobile}}</td>
            <td>{{$d->email}}</td>
            <td>{{$d->address}}</td>
            <td>{{$d->qualifications}}</td>
            <td>{{$d->branch}}</td>
            <td>{{$d->semester}}</td>
            <td>{{$d->course}}</td>
			<td>
				<a href="{{url('/registration/view/'.$d->id)}}" class="btn btn-info">View</a>
				<a href="{{url('/registration/edit/'.$d->id)}}"class="btn btn-warning">Edit</a>
				<a href="{{url('/registration/delete/'.$d->id)}}" class="btn btn-danger">Delete</a>
			</td>
		</tr>
        @endforeach

</table>

</div>
</body>
</html>
