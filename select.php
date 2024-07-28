<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="phptestdb";



$conn=mysqli_connect($hostname,$username,$password,$dbname);
if(!$conn){
    echo die(mysqli_connect_error());
}
$sql="SELECT * FROM student /*where  firstname='Tomas'  */ORDER BY id ASC LIMIT 1 ,3";
$result =mysqli_query($conn,$sql);
if(mysqli_num_rows($result) >0 ){
 while( $data= mysqli_fetch_assoc($result)){
    echo $data['id'].'      |  ' .$data['firstname'].$data['lastname'].' '.$data['email'].'<br>';
 };
  
}else{
    echo "not found data ";
}
mysqli_close($conn);
?>