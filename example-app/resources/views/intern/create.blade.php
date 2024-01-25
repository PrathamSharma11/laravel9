<!DOCTYPE html>
<html lang="en">
<head>
  <title>Intern</title>
</head>
<body>

<form action="{{url('/insert')}}" method="post">
    @csrf
    Title:<input type="text" name="title"><br>
		body:<input type="text" name="body"><br>
		College:<select name="college">
			      <option value="rjit">RJIT</option>
			      <option value="mpct">mpct</option>

		       </select><br>

	    Education:<input type="checkbox" name="education[]"  value="bca">BCA
	              <input type="checkbox" name="education[]"  value="mca">MCA
	              <br>
	    Gender:<input type="radio" name="gender" value="male">Male

<input type="radio" name="gender" value="female">FeMale
               <br><br>
              <button type="submit">submit</button>
</form>

</body>
</html>
