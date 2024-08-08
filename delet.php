<?php
include 'fdbconfig.php';
$regno=$_POST['regno'];
$sql = "DELETE FROM addstudent WHERE regno = '$regno' ";
$result = $conn->query($sql);
if ($result) {

    echo "Record deleted successfully";
    header("Location: facultyview.php");

} 
else {
    echo "Error deleting record: " . $conn->error;
}
?>
<a href="fwelcome.php"></a>