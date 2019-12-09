<?php      
    include('connection.php');
    
    //if(isset($_POST['btnLog'])){
        $user = $_POST['user'];  
        $pass = $_POST['pass'];
    //}  
      
      
        //to prevent from mysqli injection  
        $user = stripcslashes($user);  
        $pass = stripcslashes($pass);  
        $user = mysqli_real_escape_string($con, $user);  
        $pass = mysqli_real_escape_string($con, $pass);  
      
        $sql = "select * from log where user = '".$user.'" and pass = "'.$pass."'";  
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){
            echo '<script>alert("Welcome");</script>';
            //echo "<h1><center> Login successful </center></h1>";  
        }  
        else{
        
            echo '<script>alert("Failed! Try again later");</script>';  
            //echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  