<?php
	if(isset($_POST['submit'])){
		$name=test_input($_POST['name']);
		$email=test_input($_POST['email']);
		$phone=test_input($_POST['phone']);
		$message=test_input($_POST['message']);
			
			if(empty($name)){
				 $name_error ="Name is required!";
				 
			}else{
					if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
							$name_error = "Only letters and white space allowed"; 
				
						}

				}
				
			
			 if (empty($email)) {
					$email_error = "Email is required";
				
			} else {
    // check if e-mail address is well-formed
						if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
							$email_error = "Invalid email format";
						}
				}
 
			
			
			if (empty($phone)){
					$phone_error = "Phone is required";
						
			} else {
				    // check if e-mail address is well-formed
						if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)) {
								$phone_error = "Invalid phone number";
						}
				}
/* 
			if (empty($url) {
					$url_error = "";
			} else {
			 // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
						if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
						$url_error = "Invalid URL"; 
						echo $url_error;
						}
				} */


			
	$connection = mysqli_connect('localhost','root','','responses');
		if($connection){
			echo "connected to responses DB";
		}
		else{
			die("unable to connect to response DB");
		}
	$query = "insert into cform(name,email,phno,message) values('$name','$email','$phone','$message')";
	$result = mysqli_query($connection,$query);
	
	if(!$result){
		die("qury failed".mysql_error());
	}
}	


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

	
	
<!-- 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 -->
 <style>
			@import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);

* {
	margin:0;
	padding:0;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-font-smoothing:antialiased;
	-moz-font-smoothing:antialiased;
	-o-font-smoothing:antialiased;
	font-smoothing:antialiased;
	text-rendering:optimizeLegibility;
}

body {
	font-family:"Open Sans", Helvetica, Arial, sans-serif;
	font-weight:300;
	font-size: 12px;
	line-height:30px;
	color:#777;
	background:#0CF;
}

.container {
	max-width:400px;
	width:100%;
	margin:0 auto;
	position:relative;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
	background:#F9F9F9;
	padding:25px;
	margin:50px 0;
}

#contact h3 {
	color: #F96;
	display: block;
	font-size: 30px;
	font-weight: 400;
}

#contact h4 {
	margin:5px 0 15px;
	display:block;
	font-size:13px;
}

fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	min-width: 100%;
	padding: 0;
	width: 100%;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
	width:100%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
}

#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
	-webkit-transition:border-color 0.3s ease-in-out;
	-moz-transition:border-color 0.3s ease-in-out;
	transition:border-color 0.3s ease-in-out;
	border:1px solid #AAA;
}

#contact textarea {
	height:100px;
	max-width:100%;
  resize:none;
}

#contact button[type="submit"] {
	cursor:pointer;
	width:100%;
	border:none;
	background:#0CF;
	color:#FFF;
	margin:0 0 5px;
	padding:10px;
	font-size:15px;
}

#contact button[type="submit"]:hover {
	background:#09C;
	-webkit-transition:background 0.3s ease-in-out;
	-moz-transition:background 0.3s ease-in-out;
	transition:background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#contact input:focus, #contact textarea:focus {
	outline:0;
	border:1px solid #999;
}
::-webkit-input-placeholder {
 color:#888;
}
:-moz-placeholder {
 color:#888;
}
::-moz-placeholder {
 color:#888;
}
:-ms-input-placeholder {
 color:#888;
}
		.error{
			color:red;
		}
		
		
	</style>
</head>
<body>
<!--	<div class="container">
		<div class="col-xs-6">
			<form action="response.php" method="post">
				<label for="name">NAME :</label>
				<div class="form-group">
					<input type="text" class="form-control" name="name" value="<?php $name ?>" autofocus>
					<span class="error"><?php $name_error ?></span>
					<br>
				</div>
				
				<label for="email">EMAIL ADDRESSS :</label>
				<div class="form-group">
					<input type="text" class="form-control" name="email" value="<?php $email ?>">
					<br>
				</div>

				<label for="phone">PHONE NUMBER :</label>
				<div class="form-group">
					<input type="text" class="form-control" name="phone" value="<?php $phone ?>">
					<br>
				</div>

				<label for="message">WRITE SOMETHING :</label>
				<div class="form-group">
					<textarea type="text" class="form-control" name="message" value="<?php $message ?>"></textarea>
					<br>
				</div>
				
				<div class="form-group">
					<input type="submit" class="btn btn-primary" name="submit">
					<br>
				</div>
			</form>
		</div>
	</div>
-->





<div class="container">  
  <form id="contact" action="response.php" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" name="name" value="<?php $name ?>" autofocus>
	  <span class="error"><?php $name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" tabindex="2" name="email" value="<?php $email ?>">
	  <span class="error"><?php $email_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" tabindex="3" name="phone" value="<?php $phone ?>">
	  <span class="error"><?php $phone_error ?></span>
    </fieldset>

    <fieldset>
      <textarea placeholder="Type your Message Here...." type="text" tabindex="5" name="message" value="<?php $message ?>"></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 
  
</div>


</body>
</html>