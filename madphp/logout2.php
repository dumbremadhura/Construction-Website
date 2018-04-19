<?php
session_start();
$_SESSION = array();
session_destroy();
header("location:loggedout.php");
?>
<html>
<body>

</body>
</html>


