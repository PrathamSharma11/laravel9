<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
        <form action="{{url('/save')}}" method="post">
          @csrf
          <div class="mb-3">
            <label for="">username</label>
            <input type="text" name = "username" class="form-control">
          </div>
          <div class="mb-3">
            <label for="">Password</label>
            <input type="text" name = "password" class="form-control">
          </div>
          <button type="submit" class="btn btn-info">Submit</button>
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