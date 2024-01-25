<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('image/update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$data->id}}">
        title:
        <input type="text" name="title" value="{{$data->title}}"><br><br>
        image:
        <input type="file" name="image" value="{{$data->image}}"><br><br>
        <img src="{{ url('upload/'.$data->image) }}" style="height: 150px; width: 150px; border-radius: 100%;">
        <button type="submit">update</button>

    </form>
</body>
</html>
