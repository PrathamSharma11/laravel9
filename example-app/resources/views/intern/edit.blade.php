<!DOCTYPE html>
<html lang="en">
<head>
  <title>Intern</title>
</head>
<body>

<form action="{{url('intern/update')}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$data->id}}">
    Title:<input type="text" name="title" value="{{$data->title}}"><br>
		body:<input type="text" name="body" value="{{$data->body}}"><br>
		College:<select name="college">
            <option>select college</option>
			      <option value="rjit" @if($data->college=='rjit') selected @endif
                    >RJIT</option>
			      <option value="mpct" @if($data->college=='mpct') selected @endif
                    >mpct</option>

		       </select><br>

	    Education:<input type="checkbox" name="education[]"  value="bca" @if(strpos($data->education,'bca')!== false)checked @endif>BCA
	              <input type="checkbox" name="education[]"  value="mca" @if(strpos($data->education,'mca')!== false)checked @endif>MCA
	              <br>
	    Gender:<input type="radio" name="gender" value="male" @if($data->gender=='male') checked @endif>Male

                <input type="radio" name="gender" value="female" @if($data->gender=='female') checked @endif>FeMale

               <br><br>
              <button type="submit">submit</button>
</form>

</body>
</html>
