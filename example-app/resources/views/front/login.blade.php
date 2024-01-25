@extends('layout/master')

@section('title','Login')
@section('content')

<section class="login-wrap mtb-40">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-6">
                    <div class="login-box">
                        <h1>Administrator Login</h1>
                        <form action="">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <a href="dashboard.html" class="btn btn-primary">Log In</a>
                            </div>
                        </form>
                    </div>         
                </div>
    		</div>
    	</div>
    </section>
    



@endsection