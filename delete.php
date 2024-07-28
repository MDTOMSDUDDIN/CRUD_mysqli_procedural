<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="phptestdb";

$conn=mysqli_connect($hostname,$username,$password,$dbname) ;
if(!$conn){
    echo die(mysqli_connect_error());
}
$sql="DELETE FROM student WHERE ID= 5";
if(mysqli_query($conn,$sql)){
    echo"Delete data succesfully";
}else{
    echo "no delete your data";
}

mysqli_close($conn);
?>