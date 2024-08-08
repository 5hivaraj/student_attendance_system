<?php
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    include 'fdbconfig.php';
    $sql="SELECT * FROM admin WHERE username='$username' and password='$password';";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        session_start();
        $_SESSION['username']=$username;
        echo"<meta http-equiv='refresh' content='0;fwelcome.php'/>";
    }
 else 
    {
     
      echo"<script>alert('Invalid username or password')</script>";
       echo"<meta http-equiv='refresh' content='0;index.php'/>";
    }
}
 else
 {
     header("location:fwelcome.php");
 }   
 ?>

