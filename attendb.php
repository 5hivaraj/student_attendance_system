<?php

if(isset($_POST['add']))
{
     $regno=$_POST['regno'];
    $date=$_POST['date'];
    $status=$_POST['status'];
    $subject=$_POST['subject'];

    
    include "fdbconfig.php";
   
    
        $sql="insert into attendence(regno,date,status,subject)VALUES('$regno','$date','$status','$subject')";
        if($conn->query($sql))
        {
            echo"<script>alert('attendence added successsfully')</script>";
            echo"<meta http-equiv='refresh' content='0;addattendence.php'/>";
        }
     else
        {
            echo "<script>alert('error adding student')</script>";
            echo"<meta http-equiv='refresh' content='0;addattendence.php'/>";
        }
    

}
else 
{
  header("location:faculty.php");
}
   
 ?>
