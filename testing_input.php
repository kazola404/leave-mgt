<html>
<head>
<title><title>
<body>
<?php

$name = $pass = "";
$nameErr = $passErr = "";
<form action = "testing_input.php method = post">
 if ($_SERVER[request_method]=="post"){
	
	if (!empty(test_input($_post['name']))){
		echo "input accepted";
	}
	else{
		$nameErr = ("please enter your name")
	}
	if (!empty(test_input)$_post['pass']){
		echo  "password is confirm";
	}
	else{
		  $passErr = ("please enter ");
	}}

?>
Enter Surname
<input type = "text" name  =  "name" placeholder = "Enter Your Name">
Enter password
<input type =  "password" name =  "pass" placeholder = "Enter Password">
</form>
</body>
</head>
</html>