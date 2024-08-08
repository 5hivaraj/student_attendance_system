<?php

if(isset($_POST['add']))
{
    $name=$_POST['username'];
    $password=$_POST['password'];
    $repass=$_POST['repass'];

    include "fdbconfig.php";
    if($password==$repass)
    {
    
        $sql="insert into faculty(username,password)VALUES('$name',$password')";
        if($conn->query($sql))
        {
            echo"<script>alert('faculty added successsfully')</script>";
            echo"<meta http-equiv='refresh' content='0;addfaculty.php'/>";
        }
     else
        {
            echo "<script>alert('error adding student')</script>";
            echo"<meta http-equiv='refresh' content='0;addfaculty.php'/>";
        }
    }
 else
        {
            echo"<script>alert('Enter valid password')</script>";
            echo"<meta http-equiv='refresh' content='0;addfaculty.php'/>";
        }
}
else 
{
  header("location:admin.php");
}
   
 ?>

