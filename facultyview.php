<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body class="addimg">
        <table class="content-table" border="1">
            <tr>
                <th>Name</th>
                <th>ID</th>
                <th>sem</th>
                <th>password</th>
                <th>branch</th>
               
            </tr>    
      
        <?php
        include 'adminheader.php';

        include 'fdbconfig.php';
    $sql="SELECT * FROM addstudent";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        
        while($row=$result->fetch_assoc())
        {
        $name=$row['name'];
        $id=$row['regno'];
        $sem=$row['sem'];
        $password=$row['password'];
        $branch=$row['branch'];
        
         echo "<tr>
                        <td>$name</td>
                        <td>$id</td>
                        <td>$sem</td>
                        <td>$password</td>
                        <td>$branch</td>
                    
                      </tr>";
        }
        
    }    
        
    ?>
              </table>
        <a href="faculty.php"> </a>
    </body>
</html>