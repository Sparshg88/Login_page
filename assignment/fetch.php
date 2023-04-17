<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
  
  
$email123 = $_POST['email'];
$password123 = $_POST['pass'];

$servername = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'details';

$conn = mysqli_connect($servername,$userName,$password, $databaseName);

if ($conn) {
    echo "connected!!<br>";

}

  $SQL = "SELECT * FROM record where Email ='$email123' and Password = '$password123'";

  $result= mysqli_query($conn,$SQL);
  
  $numberofrows= mysqli_num_rows($result);

  if ($numberofrows>0) {
    echo"login success";
      
// //       /* redirecting to the main page  */
      session_start();


      $_SESSION['isloggedin']=true;

      header('location:protectedpage.php');
  }else{
      echo"login failed invalid login credentials";
     
  }

}



?>