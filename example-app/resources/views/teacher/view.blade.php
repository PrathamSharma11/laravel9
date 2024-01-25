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
			<th>name</th>
			<th>email</th>
            <th>college</th>
            <th>city</th>

		</tr>

        <tr>
			<td>{{$data->id}}</td>
			<td>{{$data->name}}</td>
			<td>{{$data->email}}</td>
            <td>{{$data->college}}</td>
            <td>{{$data->city}}</td>

		</tr>


</table>

</div>
</body>
</html>
