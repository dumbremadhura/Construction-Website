<?php 

session_start();

?>


<!DOCTYPE html>
<html>
<head>
<title> Simple Tender</title>
<style>
.newspaper {
    -webkit-column-count: 2; /* Chrome, Safari, Opera */
    -moz-column-count: 2; /* Firefox */
    column-count: 2;
    -webkit-column-width: 100px; /* Chrome, Safari, Opera */
    -moz-column-width: 100px; /* Firefox */
    column-width: 100px;
}

#header{
position : fixed;
width: 100%;
background-color:teal;	
color:white;
font-size:20px;	
}

#left{
float:left;	
}

#right{
float:right;	
}


    @import url("https://fonts.googleapis.com/css?family=Merriweather:300,700|Raleway:200,600");
    html {
    background: #4f4848;
    font-family: "Merriweather", sans-serif;
    font-weight: 200;
}
.newspaper {
    -webkit-column-count: 2; /* Chrome, Safari, Opera */
    -moz-column-count: 2; /* Firefox */
    column-count: 2;
    -webkit-column-width: 100px; /* Chrome, Safari, Opera */
    -moz-column-width: 100px; /* Firefox */
    column-width: 100px;
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
  
    input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color:#374247 ;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #b8b8b8;
}
    input[type=text]:focus {
    background-color: #dcdcdc;
}
input[type=button], {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}    

.deeps {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
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


</style>
</head>
<body>
<div id="header">
<div id="left"><h1>Tender</h1></div>
<div id="right">
<div class="container"><a class="button" href="http://localhost/madphp/loggedout.php">LOGOUT</a></div>
</div>
</div>
<?php
if(isset($_SESSION['username'])){
echo "<html><head><style>h3{color:red;display:block;}</style></head><body><center><h3><b>HELLO!..... {$_SESSION['username']}</b></h3></body></html>";

?>
<div class="deeps">
<form action="tender.php" method="post">
Registered Organisation Name:<br>
<input size="50px" type="text" name="u_name" required><br>
Registered Address:<br>
<input size="50px" height="100px" type="text" name="u_name" required><br>
<div class="newspaper">
Town/City:<br>
<input type="text" name="u_name" required><br>
Postcode<br>
<input type="text" name="u_name" required><br>
</div>
State:<br>
<input type="text" name="u_name" required><br>
Country:<br>
<input type="text" name="u_name" required><br>
<div class="newspaper">
Company Registration:<br>
<input type="text" name="u_name" required><br>
VAT Registration no.:<br>
<input type="text" name="u_name" required><br>
</div>

<div class="newspaper">
Size:<br>
<input type="email" name="u_email" required><br>

Status:<br>
<input type="text" name="subj" required><br>
</div>
<div class="newspaper">
Website:<br>
<input type="text" name="u_name" required><br>

Main Activity:<br>
<input type="text" name="message" required><br>
</div>
<div class="newspaper">
Business Sector:<br>
<input type="text" name="subj" required><br>
Type of Organisation:<br>
<input type="text" name="subj" required><br>
</div>
<br><br>
Upload tender in pdf format:
<input type="file" id="myFile">
<br>
<br>
<input type="submit" value="Submit"><br>
</form>
</div>
<?php
}
else{
	
	echo "YOU NEED TO LOGIN !";
}
?>

</body>
</html>