
<html>
    <head> <link href="style.css" rel="stylesheet"/></head>

        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <table border="1" class="content-table">
            <tr>
                
                <th>regno</th>
                <th>date</th>
                <th>Subject</th>
                <th>status</th>
                

            </tr>    
      
        <?php
        include 'studentheader.php';

        include 'fdbconfig.php';
        
        
        
    $sql="SELECT * FROM attendence";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        
        while($row=$result->fetch_assoc())
        {
       
        $regno=$row['regno'];
        $date=$row['date'];
        $sub=$row['subject'];
        $status=$row['status'];
        echo "<tr><td>$regno</td><td>$date</td><td>$sub</td><td>$status</td></tr>";
        }
        }
    ?>
              </table>
        <a href="student.php"> </a>
    </body>
</html>