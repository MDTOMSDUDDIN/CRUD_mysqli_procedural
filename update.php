<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="phptestdb";



$conn=mysqli_connect($hostname,$username,$password,$dbname);
if(!$conn){
    echo die(mysqli_connect_error());
}
$sql="UPDATE student SET firstname='Tomas',lastname='uddin',email='mdtomasuddin1@gmail.com' WHERE id=2";


if(mysqli_query($conn,$sql)){
    echo "Update successfully";
}else{
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>