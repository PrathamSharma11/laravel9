<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
          <h1 class="text-center">UPDATE</h1>
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
        <form action="{{url("teacher/update")}}" method="post">
          @csrf
          <input type="hidden" name ="id" value="{{$data->id}}">
          <div class="mb-3">
            <label for="">name</label>
            <input type="text" name = "name" class="form-control" value="{{$data->name}}">
          </div>
          <div class="mb-3">
            <label for="">Email</label>
            <input type="text" name = "email" class="form-control" value="{{$data->email}}">
          </div>
          <div class="mb-3">
            <label for="">College</label>
            <input type="text" name = "college" class="form-control" value="{{$data->college}}">
          </div>
          <div class="mb-3">
            <label for="">City</label>
            <input type="text" name = "city" class="form-control" value="{{$data->city}}">
          </div>
          <button type="submit" class="btn btn-info">Update</button>
        </form>
        </div>
        <div class="col-md-4">

        </div>
      </div>
    </div>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




  </body>
</html>
