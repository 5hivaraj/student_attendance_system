<!DOCTYPE html>
<html>
    <head><link href="style2.css" rel="stylesheet"/> </head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
    <?php include 'adminheader.php';?>

<button class="addb" onclick="document.getElementById('id01').style.display='block'"><h1>+Add Student</h1></button>
<div id="id01" class="modal">
  <form class="modal-content animate" action="addstddb.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>
    <div class="container">
        <label for="Faculty_name">Faculty Name</label><br>
        <input  type="text" id="name" name="name" ><br><br>
        
        
         <label for="Faculty_password">faculty Password</label><br>
         <input  type="password" id="password" name="password" ><br><br>
        
         <label for="confirm_pass">Repass</label><br>
         <input type="password" id="repass" name="repass" ><br><br>
        
         
        
        <input class="adds" type="submit" name="add" value="Add Student">
        </div>
    </div>
    <a href="ftdp.php"></a>
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>
