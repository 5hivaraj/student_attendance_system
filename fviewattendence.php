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
        <table border="1" class="content-table">
            <tr>
                <th>date</th>
                <th>regno</th>
                <th>subject</th>
                <th>status</th>
                
            </tr>    
      <?php
        include 'adminheader.php';
        
        include 'fdbconfig.php';
        
    $sql="SELECT * FROM attendence ";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        
        while($row=$result->fetch_assoc())
        {
      
        $date=$row['date'];
        $reg=$row['regno'];
        $sub=$row['subject'];
        $status=$row['status'];
        echo "<tr><td>$date</td><td>$reg</td><td>$sub</td><td>$status</td></tr>";
        }
        }
    ?>
              </table>
    </body>
</html>