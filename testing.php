		<!DOCTYPE html>
		<html >
				<head>
					<title>testing homepage</title>
				</head>
				<div>
				<?php
				$cancel = "Login Successful";
				$string = "fill the approriate field"; 
				$string ="";
				if(isset($_POST['send'])){
					echo $cancel;
				}
				
				else if(isset($_POST['cancel'])){
					$cancel = "";
				}
				else {
					echo $string;
				}
				
				?>
				</div>
					<body>
					<div class = "container">
						<form action= "testing.php" method = "post">
					  		<div class = "container">
					   	    	<label for = "name" > Name </label><br>
					   		      <input type =  "text" name = "name" placeholder =  "Enter Your Name" required><br>
					   		 	<label for = "password" >Password</label><br>
					   		 	   <input type =  "password" name =  "pass" placeholder =  "Enter Your Password" required><br>
					   		 	<label for = "Email" >Enter Email </label><br>
					   		       <input type =  "Email" name = "Email" placeholder =  "Enter Your Email" required><br>
					   		 	   <br><input type = "submit" name =  "send" value = "Sign Up">
					   		 	   <input type =  "submit" name = "cancel" value = "Cancel">
					 </div>
					   	</form>	 	
					   	</div>   

					   		 	   
					   		 	  </body>
					   	</html>	 	      
