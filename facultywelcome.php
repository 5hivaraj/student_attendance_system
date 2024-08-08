<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2> welcome </h2>
        <table border="1">
            <tr>
                <th>Username</th>
                <th>Password</th>
            </tr>    
      
        <?php
        include 'fdbconfig.php';
    $sql="SELECT * FROM faculty";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        
        while($row=$result->fetch_assoc())
        {
        $username=$row['username'];
        $password=$row['Password'];
      
        echo "<tr><td>$username</td> <td>$password</td</tr>";
        }
        }
    ?>
              </table>
    </body>
</html>