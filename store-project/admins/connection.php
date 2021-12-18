<?php    
      
    $conn=mysqli_connect("localhost","root","","store");
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  