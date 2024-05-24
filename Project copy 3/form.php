<?php    
// including the connectdb.php. So when database is connected, this page is activated. The form.php check for the username and password from the HRTrack database and matches the row and count to check for it.

    include('connectdb.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
         
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($db, $username);  
        $password = mysqli_real_escape_string($db, $password);  
      
        //selecting for username and password from HRtrack database - Login table.
        $sql = "select *from Login where username = '$username' and password = '$password'";  
        $result = mysqli_query($db, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
//If the username and password matches. Only then, the user is transferred to the home page of HRtrack website.
        if($count == 1){  
            header('Location: HR.html'); 
        }  
//If the username and password does not matches. The user is redirected back to page where he entered the data. In this case he stays on the same page.        
        else{  
            header('Location: login.html');  
        }   
        
        // adapted parts of this code from - (https://github.com/pratikvispi/Login_System_HTML_CSS_PHP/blob/master/Login_System/authentication.php). However, changed the association with databse. Also changed the journey when username and password matches or do not match.
?> 
