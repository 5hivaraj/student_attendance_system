

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body class="addimg">
        <table class="content-table" border="1">
            <tr>
                <th>Name</th>
       
                <th>password</th>
                
               
            </tr>    
      
        <?php
        include 'adminheader.php';

        include 'fdbconfig.php';
    $sql="SELECT * FROM addfaculty";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        
        while($row=$result->fetch_assoc())
        {
        $name=$row['username'];
        $password=$row['password'];
        
         echo "<tr>
                        <td>$name</td>
                        <td>$password</td>
                    
                      </tr>";
        }
        
    }    
        
    ?>
              </table>
        <a href="admin.php"> </a>
    </body>
</html>