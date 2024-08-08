<?php
if(isset($_POST['login']))
{
    $regno=$_POST['regno'];
    $password=$_POST['password'];
    include 'fdbconfig.php';
    $sql="SELECT * FROM addstudent WHERE regno='$regno' and password='$password';";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        session_start();
        $_SESSION['regno']=$regno;
        echo "<meta http-equiv='refresh' content='0;swelcome.php'/>";
        
    }
 else 
    {
     
      echo"<script>alert('Invalid registerno or password')</script>";
       echo"<meta http-equiv='refresh' content='0;index.php'/>";
    }
 
    
    
 }
 else
 {
     header("location:swelcome.php");
 }   
     

?>

