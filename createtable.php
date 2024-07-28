<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="phptestdb";

$conn=mysqli_connect($hostname,$username,$password,$dbname) ;
if(!$conn){
    echo die(mysqli_connect_error());
}
$sql="CREATE TABLE student(
id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR (30) NOT  NULL ,
lastname  VARCHAR (30) NOT  NULL ,
email     VARCHAR (50) 
)";
if(mysqli_query($conn,$sql)){
    echo"table created successfully .";
}else{
    echo $mysqli_error;
}

mysqli_close($conn);
?>