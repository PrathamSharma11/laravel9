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
			<th colspan="2">Data Display</th>
		</tr>
		<tr>
            <th>id</th>
			<th>title</th>
			<th>image</th>
            <th>action</th>

		</tr>
        @foreach($data as $d)
        <tr>
			<td>{{$d->id}}</td>
			<td>{{$d->title}}</td>
			<td><img src="{{ url('upload/'.$d->image) }}" style="height: 150px; width: 150px; border-radius: 100%;"></td>
            <td>
				<a href="{{url('/image/view/'.$d->id)}}" class="btn btn-info">View</a>
				<a href="{{url('/image/edit/'.$d->id)}}"class="btn btn-warning">Edit</a>
				<a href="{{url('/image/delete/'.$d->id)}}" class="btn btn-danger">Delete</a>
			</td>


		</tr>
        @endforeach

</table>

</div>
</body>
</html>
