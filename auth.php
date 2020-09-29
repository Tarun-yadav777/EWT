<?php      
    include('connectDB.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
            <!DOCTYPE html>
            <html>
            <head>
                
            </head>
            <body>
            <form action="info.php" method="get">
                Name: <input type="text" name="name"><br>
                Age: <input type="text" name="age"><br>
                Roll_No: <input type="text" name="roll_no"><br>
                Marks1 : <input type='' name='marks1'<br>
                Marks2 : <input type='' name='marks2'<br>
                <input type="submit">
            </form>
            
            </body>
            </html>
    
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  