<?php
$name =$_POST['name'];
$email=$_POST['email'];
$password123=$_POST['pass'];

echo $name."<br>";
echo $email."<br>";
echo $password123."<br>";

$servername ='localhost';
$username='root';
$password ='';
$databaseaname='details';

$conn= mysqli_connect($servername,$username,$password,$databaseaname);

if($conn){
    echo"connected!";
}

$query="INSERT INTO record VALUES ('$name','$email','$password123')";
echo $query;


$result= mysqli_query($conn,$query);


if($result){
    echo"inserted!!";
}
?>