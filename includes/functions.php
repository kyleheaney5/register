<?php

	//connect to database
	function Connect(){
		mysql_connect("sql304.epizy.com","epiz_21739308","Heaney200");
		mysql_select_db("epiz_21739308_admin");
	}

	//login
	function login(){
		//check if login button is pressed
		if(isset($_POST['login'])){
			$username =$_POST['username'];
			$password =$_POST['password'];
			//check if username & password are entered
			if($username&&$password){
				//connect to db
				Connect();

				//select all from db with inserted username
				$selectUser = mysql_query("SELECT * FROM users WHERE username='$username'");

				$numrows = mysql_num_rows($selectUser);

				//check if user exists
				if($numrows!=0){
					while ($row = mysql_fetch_assoc($selectUser)) {
						//get rows from db
						$uname = $row['username'];
						$pwd = $row['password'];
						//check if password is correct
						if($username==$uname&&password_verify($password, $pwd)){
							//logged in
							echo "<div class='alert alert-success'>You are logged in!</div>";
						}
						//errors
						else{
							echo "<div class='alert alert-warning'>Incorrect password!</div>";
						}
					}
				}
				else{
					echo "<div class='alert alert-warning'>Sorry but that username is incorrect!</div>";
				}
			}
			else{
				echo "<div class='alert alert-warning'>Please enter all fields to login!</div>";
			}
		}
	}


	//register
	function register(){
		if(isset($_POST['register'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			$repeatpassword = $_POST['passwordrepeat'];

			$hashed_pwd = password_hash($password, PASSWORD_DEFAULT);

			if($username&&$password&&$email&&$repeatpassword){
				if($password==$repeatpassword){
					Connect();

					$checkUser = mysql_query("SELECT username, email FROM users WHERE username = '$username' AND email = '$email'");

					$numrows = mysql_num_rows($checkUser);

					if($numrows==0){
						$insertUser = mysql_query("INSERT INTO users (username, password, email) VALUES ('$username','$hashed_pwd','$email')");


					}
					else{
						echo "<div class='alert alert-warning'>Sorry, a user with that email or username already exists!</div>";
					}
				}
				else{
					echo "<div class='alert alert-warning'>Passwords don't match!</div>";
				}
			}
			else{
				echo "<div class='alert alert-warning'>Sorry, please enter all fields to sign up!</div>";
			}
		}
	}

	//search results
	function results(){
		$q = $_GET['q'];

		if(isset($_GET['q'])){
			if($_GET['q']==""){
				echo "Enter something to search for.. ";
			}
			else{
				Connect();

				$selectResults = mysql_query("SELECT * FROM results WHERE title LIKE '%$q%'");

				$numrows = mysql_num_rows($selectResults);

				if($numrows==1){
					while ($row = mysql_fetch_assoc($selectResults)) {
						$title = $row['title'];
						$desc= $row['description'];
						$id = $row['id'];

						echo "<h4><small>$id"; ?>) <?php echo "</small>$title</h4>";
						?>
							<p>
									
								<?php  

									echo $desc;

								?>

							</p>
							<hr />
						<?php
					}
				}
				else{
					echo "Sorry, no results with them terms were returned, please try again.";
				}
			}	
		}
	}

	//file upload 
	function upload(){

	}

	//contact us
	function contact(){

	}

	//profile page
	function profile(){

	}
?>	
