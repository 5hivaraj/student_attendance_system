<?php

if(isset($_POST['add']))
{
    $reg=$_POST['regno'];
    $name=$_POST['name'];
    $branch=$_POST['branch'];
    $sem=$_POST['sem'];
    $password=$_POST['password'];
    $repass=$_POST['repass'];

    include "fdbconfig.php";
    if($password==$repass)
    {
    
        $sql="insert into addstudent(regno,name,branch,sem,password)VALUES('$reg','$name','$branch','$sem','$password')";
        if($conn->query($sql))
        {
            echo"<script>alert('student added successsfully')</script>";
            echo"<meta http-equiv='refresh' content='0;addstudent.php'/>";
        }
     else
        {
            echo "<script>alert('error adding student')</script>";
            echo"<meta http-equiv='refresh' content='0;addstudent.php'/>";
        }
    }
 else
        {
            echo"<script>alert('Enter valid password')</script>";
            echo"<meta http-equiv='refresh' content='0;addstudent.php'/>";
        }
}
else 
{
  header("location:faculty.php");
}
   
 ?>

