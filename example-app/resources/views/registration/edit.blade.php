<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PN Infosys</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style>
		@media(max-width:500px){
			.img{display: none;}
		}
	</style>
</head>
<body>
 <div class="container-fluid bg-dark">
 	<div class="container">
 		<!--------div class row starts------------->
 		<div class="row">
 			<div class="col-md-6">
 			<br>
 			<h3 style="color: white;">Do Summer Internship From Home!.</h3>
 			<p style="color: white;">Once you"re registered, you can:</p>
 			<p style="color: white;">In Case any query, Kindly Contact: 7000846823</p>
 			<hr style="color: white;">
 			<img src="https://www.pninfosys.online/image/banner3.jpg" class="img" height="550px" width="550px">
 			<h3 style="color: white;">Learn from the comfort of your home</h3>
 			<p style="color: white;">work-from-home transformational program aimed at building the leaders of tomorrow. Any college student from any degree, stream, and year of study can apply for this program.</p>
 			</div>
 			<div class="col-md-6 bg-white">
 				<br>
 				<h3 class="text-info text-center">Registration Form 2022</h3>
 				<form method="post" action="{{url('registration/update')}}" >
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
 					<div class="form-group">

			        <label class="text-dark">Student Name:</label>
			        <input type="text" name="name" placeholder="Enter Name"class="form-control" value="{{$data->name}}">



                   </div>



                  <div class="form-group">

         	      <label class="text-dark">Mobile Number:</label>
         	      <input type="number" name="number" placeholder="Enter Number" class="form-control" value="{{$data->mobile}}">


                  </div>


                 <div class="form-group">
         	     <label class="text-dark">Email:</label>
         	     <input type="email" name="email" placeholder="Enter Email" class="form-control" value="{{$data->email}}">



                 </div>


                <div class="form-group">
         	    <label class="text-dark">Address:</label>
         	    <input type="text" name="address" class="form-control" value="{{$data->address}}">


                </div>
                <div class="form-group">
        	    <label class="text-dark">Qualifications:</label>
        	    <select name="qualifications" class="form-control">
        		<option>Select</option>
        		<option value='btech' @if($data->qualifications=='btech')selected @endif>btech</option>
        		<option value='mtech' @if($data->qualifications=='mtech')selected @endif>mtech</option>

        	    </select>

                </div>



               <div class="form-group">
        	    <label class="text-dark">Branch:</label>
        	    <select name="branch" class="form-control" >
        		<option>Select</option>
        		<option value='cs' @if($data->branch=='cs')selected @endif>cs</option>
        		<option value='it' @if($data->branch=='it')selected @endif>it</option>
        		<option value='mech' @if($data->branch=='mech')selected @endif>mech</option>
        		<option value='ec' @if($data->branch=='ec')selected @endif>ec</option>

        	   </select>

              </div>


                <div class="form-group">
        	    <label class="text-dark">Semester:</label>
        	    <select name="semester" class="form-control" >
        		<option>Select</option>
        		<option  value='3rd' @if($data->semester=='3rd')selected @endif>3rd</option>
        		<option  value='5th' @if($data->semester=='5th')selected @endif>5th</option>
        		<option  value='7th' @if($data->semester=='7th')selected @endif>7th</option>
        		<option  value='graduate' @if($data->semester=='graduate')selected @endif>Graduate</option>

        	   </select>

              </div>



        	    <div class="form-group">
        	    <label class="text-dark">Internship Course:</label>
        	    <select name="intern" class="form-control" value="{{$data->course}}">
        		<option>Select</option>
        		<option  value='web designing' @if($data->course=='web designing')selected @endif>Web Designing</option>
        		<option  value='web development' @if($data->course=='web development')selected @endif>Web Development</option>
        		<option  value='python' @if($data->course=='python')selected @endif>Python</option>
        		<option  value='django' @if($data->course=='django')selected @endif>Django</option>

        	    </select>

                </div>




               <input type="submit" name="" value="Submit" class="btn btn-info" style="position: relative; top: 15px;">




 				</form>
 			</div>
 		</div>
 		<!----------div class row ends--------------->
 	</div>
 </div>

</body>
</html>
