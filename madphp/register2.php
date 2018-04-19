<?php
	session_start();
?>
<?php
$_SESSION['message'] = "";
	
	//connection establihsment
	
		$connection = mysqli_connect('localhost','root','','mad');
		if($connection){
			echo "connected to mad DB";
		}
		else{
			die("unable to connect to mad DB");
		}

	//if form is submitted
	
	if(isset($_POST['submit'])){
		
		$name=$_POST['name'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		

	//check for username in DB
	
		$check = "select * from users where username='$username'";
		$usercheck = mysqli_query($connection,$check);
		if(mysqli_num_rows($usercheck)>=1)
		{
			
				$username_error= "<html><head><body><h2>USERNAME ALREADY EXIXTS</h2></body></head></html>";
				echo $username_error;
	
		}else{
			
			if($password != $cpassword){
				$password_error = "password doesnt match!!1";
				echo $password_error; 
				exit;
				
			}else{
				
				$name=htmlspecialchars($_POST['name']);
				$email=htmlspecialchars($_POST['email']);
				$username=htmlspecialchars($_POST['username']);
				$password=md5($_POST['password']);
				
				$_SESSION['username'] = $username;
				
				$insert = "insert into users(name,email,username,password) values('$name','$email','$username','$password')";
				$result = mysqli_query($connection,$insert);
						if(!$result){
								die("qury failed".mysql_error());
						}
						else{
							$_SESSION['message'] = "NEW USER added to the DB!!";
							echo $_SESSION['message'];
							header("location:index.html");
						}	
			}	

			
		}
		
	
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
			.error{
			color:red;
			font-family:arial;
		}
        * {
    box-sizing: border-box;
}

input[type=text], select, textarea{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: black;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: black;
}

.container {
    border-radius: 5px;
    background-color: #bebebe;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
	</style>
    <meta charset="UTF-8">
    <title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<a name="signup"></a>
	<div class="container">
		<div class="col-xs-6">
			<form action="register2.php" method="post">

				<label for="name">NAME :</label>
				<div class="form-group">
					<input type="text" class="form-control" name="name" required>
					<br>
				</div>

				<label for="name">EMAIL :</label>
				<div class="form-group">
					<input type="email" class="form-control" name="email" required>
					<br>
				</div>

				
				<label for="username">USERNAME :</label>
				<div class="form-group">
					<input type="text" class="form-control" name="username" required>
					<br>
				</div>
				
				<label for="password">PASSWORD :</label>
				<div class="form-group">
					<input type="password" class="form-control" name="password" required>
					<br>
				</div>

				<label for="cpassword">CONFIRM PASSWORD :</label>
				<div class="form-group">
					<input type="password" class="form-control" name="cpassword" required>
					<br>
				</div>
				
				
				<div class="form-group">
					<input type="submit" class="btn btn-primary" name="submit">
					<br>
				</div>

			</form>
		</div>
	</div>
</body>
</html>