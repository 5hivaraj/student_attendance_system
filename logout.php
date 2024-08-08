<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        $_SESSION['username']=$username;
        echo"<meta http-equiv='refresh' content='0;admin.php'/>";
        ?>
    </body>
</html>
