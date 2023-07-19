<?php

include ("../conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['Slno'];
    
 
    $query = "DELETE FROM vehicledetails WHERE Slno = '$id'";
    mysqli_query($conn, $query);
    
    echo "<script>
    alert('Deleted Sucessful');
window.location.href='../agency/vvehicle.php';
      </script>";
}



?>


