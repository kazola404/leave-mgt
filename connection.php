<?php      
    $host = "localhost";  
    $user = "root";  
    $passw = '';  
    $db_name = "log";  
      
    $con = mysqli_connect($host, $user, $passw, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  