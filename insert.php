<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="phptestdb";



$conn=mysqli_connect($hostname,$username,$password,$dbname);
if(!$conn){
    echo die(mysqli_connect_error());
}
$sql="INSERT INTO student(firstname,lastname,email) VALUES('parvaz' ,'rohman','mdtomasuddin1@gmail.com')";
// $sql="INSERT INTO student(firstname,lastname,email) VALUES('tomas' ,'uddin','mdtomasuddin1@gmail.com')";


if(mysqli_query($conn,$sql)){
    echo "insert successfully";
}else{
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>