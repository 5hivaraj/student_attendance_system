<!DOCTYPE html>
<html>
    <head><link href="style2.css" rel="stylesheet"/> </head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
    <?php include 'adminheader.php';?>

<button class="addb" onclick="document.getElementById('id01').style.display='block'"><h1>+Add Attendance</h1></button>
<div id="id01" class="modal">
  <form class="modal-content animate" action="addstddb.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>
    <div class="container">
        <label for="regno">Register no</label><br>
        <input  type="text" id="regno" name="regno" required><br><br>
        
        <label for="date">date</label><br>
        <input type="date" id="date" name="date" required><br><br>
        
        <label for="status">Status</label><br>
        <select name="status" required>
            <option></option>
        <option> Present </option>
        <option> Absent </option>
        </select><br><br>
        
        <label for="subject">Subject</label><br>
         <select class="crs" name="subject" required>
             <option></option>
             <option> PHP</option>      
             <option>Data Mining</option>
             <option>Artificial Intelligence</option>
             <option>Digital Image Processing</option>
         </select><br><br>
           <input class="attb" type="submit" name="add" value="Add Attendance">
        </div>
    </div>
    <a href="attendb.php"></a>
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
