<?php
	include("includes/functions.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css?version=1" type="text/css">
    <link rel="stylesheet" href="css/custom.css?version=2" type="text/css">

    <title>Hello, world!</title>
  </head>
  <body>
	<nav style="background:rgba(00,00,00,0.5); color:#CCC; margin-bottom:5%;" aria-label="breadcrumb" id="breadcrumb">
		<div class="container">
		  <ol style="margin:0; padding-left:0;" class="breadcrumb">
		    <li class="breadcrumb-item"><a href="/">NIDesigning</a></li>
		    <li class="breadcrumb-item"><a href="/work.html">Projects</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Login / Register</li>
		  </ol>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
				  <div class="card-body">
				    <div class="register">
				    	<form action="" method="POST">
				    		<input type="text" name="username" class="form-control" placeholder="Username.. "/>
				    		<input type="text" name="email" class="form-control" placeholder="E-mail.. " />
				    		<input type="password" name="password" class="form-control" placeholder="Password.. " />
				    		<input type="password" name="passwordrepeat" class="form-control" placeholder="Repeat password.. " />
				    		<button name="register" class="btn btn-outline-dark">Sign up!</button>
				    		<br />
				    		<br />
				    		<?php
				    			register();
				    		?>
				    	</form>
				    </div>
				  </div>
				</div>
			</div>
			<div class='col-md-6'>
				<div class="card">
				  <div class="card-body">
				    <div class="login">
				    	<form action="" method="POST">
				    		<input type="text" name="username" class="form-control" placeholder="Username.. "/>
				    		<input type="password" name="password" class="form-control" placeholder="Password.. " />
				    		<button name="login" class="btn btn-outline-dark">Sign up!</button>
				    		<br />
				    		<br />
				    		<?php
				    			login();
				    		?>
				    	</form>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery-3.3.1.min.js?version=1" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.js?version=1" type="text/javascript"></script>
  </body>
</html>
