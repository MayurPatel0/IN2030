<!-- Connecting o the database. If it does not connect an error needs to be printed out with regards to it not neing connected. -->

<?php      
    $host = "localhost";   $username = "root";   $password = '';  $db_name = "HRLogin";  
      
    $db = new mysqli($host, $username, $password, $db_name);  
    if ($db->connect_error) {
        printf("Connection failed: %s/n" . $db->connect_error);
        exit();
    }
?>  