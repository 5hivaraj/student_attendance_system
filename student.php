<!DOCTYPE html>
<html>
<head><link href="style2.css" rel="stylesheet"/> </head>
<body>
    <?php include 'header.php';?>
    <form method="POST" action="sregdb.php" >
  <div class="imgcontainer">
    <img src="s1.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="regno"><b>Reg no</b></label>
    <input type="text" placeholder="Enter Regno" name="regno" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="myInput" required>
    <input type="checkbox" onclick="myFunction()"> show password
    <script>
        function myFunction()
        {
            var x=document.getElementById("myInput");
            if(x.type==="password")
            {
                x.type="text";
            }
        else
            {
                x.type="password";
            }
        }
     </script>   
    <button type="submit">Login</button>
    <a href="swelcome.php"></a>
    </div>
 </form>



