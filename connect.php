<?php
   	// code...  
    $username=$_POST['username'];
    $password=$_POST["password"];
    
    //database details 
    $host='localhost';
    $username="root";
    $password="";
    $database="clginfo" ;

    //creating a connection
    $con=mysqli_connect($host,$username,$password,$database);
    if(!$con)
    {
    	die("connection failed".mysqli_connect_error());
    } 
    echo"connected successfully";

    //using  sql to crerat data entery query
    $sql="INSERT INTO info(username,password) VALUES ('$username',"$password")";
// send query to database to add values and confirm if succesfull
    if ($rs) {
    	echo"!";
    	// code...
    }
    //database close
    mysqli_close($con)

?>