<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('image/save')}}" method="post" enctype="multipart/form-data">
        @csrf
        title:
        <input type="text" name="title"><br><br>
        image:
        <input type="file" name="image"><br><br>
        <button type="submit">submit</button>

    </form>
</body>
</html>
