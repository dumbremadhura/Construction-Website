<?php
	session_start();
	
		$connection = mysqli_connect('localhost','root','','mad');
		if($connection){
			echo "connected to mad DB";
		}
		else{
			die("unable to connect to mad DB");
		}

if(isset($_POST['submit'])){
	
      $username = mysqli_real_escape_string($connection,$_POST['username']);
      $password = mysqli_real_escape_string($connection,$_POST['password']); 
	  $passcode = md5($password);
	  
      
      $sql = "SELECT id FROM users WHERE username = '$username' and password = '$passcode'";
	  $result=mysqli_query($connection,$sql);
      $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
/* 	  $active=$row['active'];
 */	  $count=mysqli_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
	
$_SESSION['username']=$username;

header("location:tender.php");
}
else 
{
$error="Your Login Name or Password is invalid";
echo $error;
}
 
}
		
		
/* 		
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($connection,$_POST['username']);
      $password = mysqli_real_escape_string($connection,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($connection,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("username");
         $_SESSION['username'] = $username;
         
         header("location:tender.php");
      }else {
       	   $error = "Your Login Name or Password is invalid";
			echo $error;
	  }
   }		
 */		
		
/* 
	if(isset($_POST['submit'])){
		

    $username = $_POST['username'];
    $password = $_POST['password'];

	
	
 
	//Create query
	$qry="SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result=mysqli_query($connection,$qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result)>=1) {
			//Login Successful
		
			$_SESSION['username'] = $username;
			echo $_SESSION['username'];
			echo "AFTER QUERY"+$_SESSION['username'];
			echo "Query succesful";
			header("location:tender.php");
		
		}else {
			//Login failed
			echo 'user name and password not found';
			header("location: login2.php");
			}
		}
	else {
		echo "QUERY FAILED!!!DUMBASS";
		die("Query failed");
	}
	
	}	

 */	
	

/* if(isset($_REQUEST['submit'])){
if (isset($_REQUEST['username']) and isset($_REQUEST['password'])) {
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

$sql = "SELECT * from users where username='".$username."' and password='".$password."'";
$result = mysqli_query($connection,$sql);

if (mysqli_num_rows($result)>=1) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $_SESSION["username"]= $row['username'];
		
    }

}

$sql = "SELECT * from users where username='".$username."'";
$result = mysqli_query($connection,$sql);

if(isset($_SESSION["username"])) {
header("Location:tender.php");
}
else {
//header("Location:login2.php");
echo "invalid username and password";
}

} 
}  */
?>
	
	
	
	
	
	

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
	/*myStyle.css*/
*{
  box-sizing: border-box;
}

body{
 background:#DCDCDC;
  color:black;
  line-height:1.6;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  padding:1em;
}

.container{
  max-width:1170px;
  margin-left:auto;
  margin-right:auto;
  padding:1em;
}

ul{
  list-style: none;
  padding:0;
}

.brand{
  text-align: center;
}

.brand span{
  color:#fff;
}

.wrapper{
  box-shadow: 0 0 20px 0 rgba(72,94,116,0.7);
}

.wrapper > *{
  padding: 1em;
}

.company-info{
  background:#888888;
}

.company-info h3, .company-info ul{
  text-align: center;
  margin:0 0 1rem 0;
}

.contact{
  background:#B8B8B8;
}

/* FORM STYLES */
.contact form{
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap:20px;
}

.contact form label{
  display:block;
}

.contact form p{
  margin:0;
}

.contact form .full{
  grid-column: 1 / 3;
}

.contact form button, .contact form input, .contact form textarea{
  width:100%;
  padding:1em;
  border:1px solid #B8B8B8;
}

.contact form button{
  background:#E0E0E0;
  border:0;
  text-transform: uppercase;
}

.contact form button:hover,.contact form button:focus{
  background:#B0B0B0;
  color:#fff;
  outline:0;
  transition: background-color 2s ease-out;
}

/* LARGE SCREENS */
@media(min-width:700px){
  .wrapper{
    display: grid;
    grid-template-columns: 1fr 2fr;
  }

  .wrapper > *{
    padding:2em;
  }

  .company-info h3, .company-info ul, .brand{
    text-align: left;
  }
}



a{
 text-decoration:none;
 color:#cc0000;
}

a.button{
 background-color:#white;
 border:1px solid #660000;
 border-radius:5px;
 color:#fff;
 padding:10px 10px 10px 10px;
}

        /*form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
        button:hover {
    opacity: 0.8;
}


.container {
    padding: 16px;
}
        /*Change styles for span and cancel button on extra small screens */
/*@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}*/
@import url("https://fonts.googleapis.com/css?family=Merriweather:300,700|Raleway:200,600");

html {
    background: #4f4848;
    font-family: "Merriweather", sans-serif;
    font-weight: 200;
}

.container1 {
    width: 420px;
    margin: 0 auto;
    background: #dcdcdc;
    box-shadow: 0 2px 5px 1px rgba(0,0,0,0.75);
    -moz-box-shadow: 0 2px 5px 1px rgba(0,0,0,0.75); 
    -webkit-box-shadow: 0 2px 5px 1px rgba(0,0,0,0.75); 
}

h1 {
    font-weight: 300;   
}

.header h1 {
    padding: 20px 0;
    text-align:center;
    background:#696969;
    color: #fff;
}

form {
   padding: 6%; 
}

input {
    display: block;
    padding: 10px 0;
    width: 100%;
    margin-bottom: 10px;
    -webkit-transition: background 1s ease;
    -moz-transition: background 1s ease;
    -o-transition: background 1s ease;
    -ms-transition: background 1s ease;
    transition: background 1s ease;
}
   
input[type="submit"]{
   /* background: #546e7a;*/
    background:#696969;
    color: #fff;
    border: 0;
    padding: 15px 0;
    margin-top: 20px;
}

input:focus {
    background: #374247;
    color: #fff;
    outline-width: 0;
}

	
	</style>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<div id="container">
	<div>
	<?php 
	if(isset($_SESSION['username'])){
		echo "HELLO ! {$_SESSION['username']}";
	}else{
	?>
	<center>
	
	<fdiv class="container1">
		<form action="login2.php" method="post">
		
		        <label for="username">USERNAME :</label>
				<input type="text" name="username" required>
				<br>
				<br><br>
				
				<label for="password">PASSWORD :</label>
				<input type="password" name="password" required>
				<br>
				<br><br>
				
				<input type="submit" name="submit">
				
	
	</form>
	</div>
	</center>
<?php 
	};
?>	
<?php
	if(isset($_SESSION['username'])){

?>
<center>
<div class="container"><a class="button" href="http://localhost/madphp/tender.php">GO TO TENDER PAGE</a></div>
</center>
<?php 
	};
?>
	</div>
</div>

</body>
</html>